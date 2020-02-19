<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Permits\CreatePermitsRequest;
use App\Permit;
use App\Http\Requests\Permits\UpdatePermitRequest;
use App\Category;
use App\Barangay;
use App\Charts\PermitsChart;
use App\Scope;
use App\Occupant;
use App\State;
use PDF;
use Carbon\Carbon;


class PermitsController extends Controller
{

    public function __construct()
    {

        $this->middleware('verifyCategoriesCount')->only(['create','store']);
        
    }








    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('permits.index')->with('permits', Permit::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('permits.create')
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
        // para mak
        $permit = Permit::create([
            'type' => $request->type,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mi_name' => $request->mi_name,
            'category_id' => $request->category_id,
            'barangay_id' => $request->barangay_id,
            'state_id' => $request->state_id
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
        return redirect(route('permits.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //  return redirect(route('permits.index'));
         return redirect(route('admins.index'));
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
        $permit = Permit::withTrashed()->where('id',$id)->firstOrFail();
        //
        if($permit->trashed()) {
            $permit->forceDelete();
        } else {
            $permit->delete();
        }
        //flash message
        session()->flash('success', 'Permit deleted successfully.');

        //redirect user
        return redirect(route('permits.index'));
    }

    /**
     * Trash permits.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        //get all trashed post from DB
        $trashed = Permit::onlyTrashed()->get();
        //
        return view('permits.index')->withPermits($trashed);
    }

    /**
     * Restore trashed permits.
     *
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $permit = Permit::withTrashed()->where('id', $id)->firstOrFail();
        $permit->restore();
        //flash message
        session()->flash('success', 'Trashed Permit restored successfully.');
        //
        return redirect()->back();
    }

    public function printPDF()
    {
       // This  $data array will be passed to our PDF blade
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.' 
            ];
            
        $pdf = PDF::loadView('pdfs.pdf_view', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_B' . rand() . '.pdf');

        return redirect(route('permits.index'));
    }

    public function printMechanical()
    {
       // This  $data array will be passed to our PDF blade
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.' 
            ];
            
        $pdf = PDF::loadView('pdfs.nbc_form_a04', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_a04_' . rand() . '.pdf');

        return redirect(route('permits.index'));
    }

    public function printCivil()
    {
       // This  $data array will be passed to our PDF blade
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.' 
            ];
            
        $pdf = PDF::loadView('pdfs.nbc_form_a02', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_a02_' . rand() . '.pdf');

        return redirect(route('permits.index'));
    }


    public function acceptPermit(Permit $permit)
    {
        $permit->accepted_date = Carbon::now();
        $permit->state_id = 2;

        $permit->save();

        session()->flash('success', 'Permit has been accepted successfully. Time is now running.');

        return redirect(route('admins.index'));
    }

    public function revokeacceptPermit(Permit $permit)
    {
        $permit->accepted_date = null;
        $permit->state_id = 1;

        $permit->save();

        session()->flash('success', 'Permit accept has been revoked successfully. Permit status is back to New.');

        return redirect(route('admins.index'));
    }

    public function approvePlumbing(Permit $permit)
    {
        // dd('here');
        $permit->plumbing_approval_date = Carbon::now();

        $permit->save();

        session()->flash('success', 'Plumbing Permit has been accepted successfully.');

        return redirect(route('admins.displaypermit', $permit->id));
    }

    public function approveMechanical(Permit $permit)
    {
        // dd('here');
        $permit->mechanical_approval_date = Carbon::now();

        $permit->save();

        session()->flash('success', 'Mechanical Permit has been accepted successfully.');

        return redirect(route('admins.displaypermit', $permit->id));
    }

    public function approveElectronics(Permit $permit)
    {
        // dd('here');
        $permit->electronics_approval_date = Carbon::now();

        $permit->save();

        session()->flash('success', 'Electronics Permit has been accepted successfully.');

        return redirect(route('admins.displaypermit', $permit->id));
    }

    public function approveElectrical(Permit $permit)
    {
        // dd('here');
        $permit->electrical_approval_date = Carbon::now();

        $permit->save();

        session()->flash('success', 'Electrical Permit has been accepted successfully.');

        return redirect(route('admins.displaypermit', $permit->id));
    }

    public function approveCivil(Permit $permit)
    {
        // dd('here');
        $permit->civil_approval_date = Carbon::now();

        $permit->save();

        session()->flash('success', 'Civil Permit has been accepted successfully.');

        return redirect(route('admins.displaypermit', $permit->id));
    }  
    
    public function approveBuilding(Permit $permit)
    {
        if (!isset($permit->civil_approval_date) or !isset($permit->electrical_approval_date) or !isset($permit->electronics_approval_date)
         or !isset($permit->mechanical_approval_date) or !isset($permit->plumbing_approval_date))
        {
            session()->flash('error', 'Please complete Ancillary Permits approvals before approving Building permit ');
            return redirect(route('admins.displaypermit', $permit->id));
        } else {
            $permit->building_approval_date = Carbon::now();
            $permit->state_id = 5;
            $permit->save();
            session()->flash('success', 'Building Permit has been accepted successfully.');
            return redirect(route('admins.displaypermit', $permit->id));
        }
    }  
}
