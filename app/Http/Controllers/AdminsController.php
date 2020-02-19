<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Permits\CreatePermitsRequest;
use App\Permit;
use App\Http\Requests\Permits\UpdatePermitRequest;
use App\Category;
use App\Barangay;
use App\Charts\BarangaysChart;
use App\Charts\CategoriesChart;
use App\Charts\PermitsChart;
use App\Scope;
use App\Occupant;
use App\Remark;
use App\State;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Database\Eloquent\Builder;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $immediates = Permit::immediate()->get();
        $newpermits = Permit::newpermits()->get();
        $processing = Permit::processing()->get();
        $completed = Permit::completed()->get();

        // $data = Permit::all()->groupBy('state_id')->map(function ($item) {
        //     return count($item);
        // });

        $data = State::withCount('permits')->get();
        

        // $brgy_data = Permit::all()->groupBy('barangay_id')->map(function ($item) {
        //     return count($item);
        // });

        $brgy_data = Barangay::withCount('permits')->get();
        // dd($brgy_data);

        // $categ_data = Permit::all()->groupBy('category_id')->map(function ($item) {
        //     return count($item);
        // });

        
        $categ_data = Category::withCount('permits')->get();


        $chart = new PermitsChart;
        // $chart->labels($data->keys());
        $chart->labels($data->pluck('name'));
        $data->pluck('permits_count'); 
        // dd($data);
        $chart->dataset('Permits', 'doughnut', $data->pluck('permits_count')->values())->options([
            'color' => '#ffffff',  'backgroundColor' => [
                "#64c4ed",
                "#4f81c7",
                "#e16363",
                "#c5f0a4",
                "#ffd692" 
              ],
        ]);


        $brgy_chart = new BarangaysChart;
        // $brgy_chart->labels($brgy_data->keys());
        $brgy_chart->labels($brgy_data->pluck('name'));
        $brgy_data->pluck('permits_count'); 
        $brgy_chart->dataset('Barangays', 'doughnut', $brgy_data->pluck('permits_count')->values())->options([
            'color' => '#ffffff',  'backgroundColor' => [
                "#64c4ed",
                "#4f81c7",
                "#e16363",
                "#c5f0a4",
                "#ffd692" 
              ],
        ]);

        $categ_chart = new CategoriesChart;
        // $categ_chart->labels($categ_data->keys());
        $categ_chart->labels($categ_data->pluck('name'));
        $categ_data->pluck('permits_count'); 
        $categ_chart->dataset('Barangays', 'doughnut', $categ_data->pluck('permits_count')->values())->options([
            'color' => '#ffffff',  'backgroundColor' => [
                "#64c4ed",
                "#4f81c7",
                "#e16363",
                "#c5f0a4",
                "#ffd692" 
              ],
        ]);

        return view('admins.index')->with('permits', Permit::all())
                                    ->with('immediates', $immediates)
                                    ->with('processing', $processing)
                                    ->with('completed', $completed)
                                    ->with('newpermits', $newpermits)
                                    ->with('chart', $chart)
                                    ->with('brgy_chart', $brgy_chart)
                                    ->with('categ_chart', $categ_chart);


    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('admins.create')

        ->with('permits', Permit::all())
        ->with('categories', Category::all())
        ->with('barangays', Barangay::all())
        ->with('scopes', Scope::all())
        ->with('occupants', Occupant::all())
        ->with('states', State::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePermitsRequest $request)
    {
        //
        // create application_id by combining date today + random 4 digit number
        $mytime = Carbon::now();
        $daterand = $mytime->toDateString() . "-" . rand(100, 9999) ;
        $res = str_replace("-", "", $daterand);

        $permit = Permit::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mi_name' => $request->mi_name,
            'address' => $request->address,
            'category_id' => $request->category_id,
            'barangay_id' => $request->barangay_id,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'zipcode' => $request->zipcode,
            'tin' => $request->tin,
            'loc_blk' => $request->loc_blk,
            'loc_lot' => $request->loc_lot,
            'loc_street' => $request->loc_street,
            'tct' => $request->tct,
            'taxdec' => $request->taxdec,
            'storeys' => $request->storeys,
            'floorarea' => $request->floorarea,
            'ownerform' => $request->ownerform,
            'cost' => $request->cost,
            'start' => $request->start,
            'end' => $request->end,
            'application_id' => $res,
            'state_id' => 1,
            'category_id' => $request->category_id
        ]);

        if($request->scopes) {
            $permit->scopes()->attach($request->scopes);
        }

        if($request->occupants) {
            $permit->occupants()->attach($request->occupants);
        }
        //flash message
        session()->flash('success', 'Permit created successfully.');

        //redirect user
        return redirect(route('admins.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permit $permit)
    {
        //
        return view('permits.create')
        // ->with('permits', Permit::all())
        ->with('permit', $permit)
        ->with('categories', Category::all())
        ->with('barangays', Barangay::all())
        ->with('scopes', Scope::all())
        ->with('occupants', Occupant::all())
        ->with('states', State::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermitRequest $request, Permit $permit)
    {
        //
                // dd(request()->all());
        //get all data from request
        $data = $request->all();
        //update attributes

        if($request->scopes) {
            $permit->scopes()->sync($request->scopes);
        }

        
        if($request->occupants) {
            $permit->occupants()->sync($request->occupants);
        }



        $permit->update($data);
         //flash message
         session()->flash('success', 'Permit updated successfully.');

         //redirect user
         return redirect(route('permits.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function displayPermit(Permit $permit, Request $request)
    {
        //
        return view('admins.display')
        // ->with('permits', Permit::all())
        ->with('permit', $permit)
        ->with('categories', Category::all())
        ->with('barangays', Barangay::all())
        ->with('scopes', Scope::all())
        ->with('occupants', Occupant::all())
        ->with('states', State::all())
        ->with('remarks', Remark::where('permit_id', $permit->id)->orderBy('created_at', 'DESC')->get());
    }

    public function searchPermits(Request $request)
    {
        // dd($request->month);

        // dd($created);
        //
        return view('admins.search')
        ->with('permits', Permit::whereYear('created_at', date('Y'))->get())
        ->with('categories', Category::all())
        ->with('barangays', Barangay::all())
        ->with('scopes', Scope::all())
        ->with('occupants', Occupant::all())
        ->with('states', State::all());
    }

    public function searchResults(Request $request, Permit $permit)
    {
        $myYear = $request->year;
        $myMonth = $request->month;
        $myBarangay = $request->barangay_id;
        $myCategory = $request->category_id;
        $myScope = $request->scopes;
        $myCharacter = $request->occupants;
        $myState = $request->state_id;
        $display_date = Carbon::now()->toFormattedDateString();

        

        // dd($request->all());

        $permit = $permit->newQuery();

        if($myMonth === '13') {
            $permit->whereYear('created_at',$myYear);
        } else {
                $permit->whereYear('created_at',$myYear)
                ->whereMonth('created_at',$myMonth);
                $month_name = date("F", mktime(0, 0, 0, $myMonth, 10));
        };

        if($myCategory !== '100') {
            $permit->where('category_id',$myCategory);
            $category_name = Category::where('id',$myCategory)->value('name');
        };

        if($myState !== '100') {
            $permit->where('state_id',$myState);
            $state_name = State::where('id',$myState)->value('name');
        };

        if($myBarangay !== '100') {
            $permit->where('barangay_id',$myBarangay);
            $barangay_name = Barangay::where('id',$myBarangay)->value('name');
        };

        if($myScope !== '100') {
            $permit->whereHas('scopes', function($q) use ($myScope) {
                $q->where('scopes.id', $myScope);
             });
             $scopes_name = Scope::where('id',$myScope)->value('name');
        }

        if($myCharacter !== '100') {
            $permit->whereHas('occupants', function($q) use ($myCharacter) {
                $q->where('occupants.id', $myCharacter);
             });
             $occupant_name = Occupant::where('id',$myCharacter)->value('name');
        }


        switch($request->submit) {

            case 'show': 
                return view('admins.search')
                ->with('permits', $permit->get())
                ->with('categories', Category::all())
                ->with('barangays', Barangay::all())
                ->with('scopes', Scope::all())
                ->with('occupants', Occupant::all())
                ->with('states', State::all());
    
            break;
        
            case 'pdfform': 

                $permits = $permit->get();
                $categories = Category::all();
                $barangays = Barangay::all();
                $scopes = Scope::all();
                $occupants = Occupant::all();
                $states = State::all();

                
                $pdf = PDF::loadView('pdfs.reports', compact('permits', 'categories', 'barangays', 'scopes', 'occupants', 'states','myYear','myMonth', 
                                                            'myBarangay', 'barangay_name', 'myScope', 'scopes_name', 'myCategory','category_name',
                                                            'myCharacter','occupant_name','month_name', 'myState', 'state_name', 'display_date'))->setPaper('legal',  'landscape');  
                return $pdf->download('report-' . $display_date  . '.pdf');
            break;
        }
        

    }

    public function addPermitRemarks(Permit $permit, Request $request) 
    {
        // dd(Auth::user()->id);
        // dd($permit);
        // dd($request->body);
        
        $remark = Remark::create([
            'body' => $request->body,
            'permit_id' => $permit->id,
            'user_id' => Auth::user()->id
        ]);

        session()->flash('success', 'Remark created successfully.');

        return back()->with('permits', $permit);

        //redirect user
        // return redirect(route('admins.index'));
    }


}
