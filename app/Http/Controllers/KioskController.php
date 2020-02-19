<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\Permits\CreatePermitsRequest;
use App\Permit;
use App\Barangay;
use App\Scope;
use App\Occupant;
use App\State;
use PDF;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;



class KioskController extends Controller
{
    //

    public function index(Request $request) {
        $categx = $request->categ;
        return view('welcome')
        ->with('categories', Category::all())
        ->with('barangays', Barangay::all())
        ->with('scopes', Scope::all())
        ->with('occupants', Occupant::all())
        ->with('states', State::all())
        ->with('categx', $categx);
    }

    public function addsimplepermit(Request $request) {
        $categx = $request->categ;
        // dd($categx);
        return view('kiosks.simple')
        ->with('categories', Category::all())
        ->with('barangays', Barangay::all())
        ->with('scopes', Scope::all())
        ->with('occupants', Occupant::all())
        ->with('states', State::all())
        ->with('categx', $categx);
    }

    
    public function Search(Request $request) {
        
        if(isset($request->application_id)) {
            try {
                $res = preg_replace("/[-]/", "", $request->application_id);
                $permit = Permit::where('application_id',$res)->firstorfail();
            } catch (ModelNotFoundException $exception) {
                session()->flash('error', 'Error 404. No Record Found.');
                return redirect(route('kiosk.index'));
            }
            return view('kiosks.search')->with('permit', $permit);       
        }

        if(isset($request->tct)) {
            try {
            $permit = Permit::where('tct',$request->tct)->firstorfail();
            } catch (ModelNotFoundException $exception) {
                session()->flash('error', 'Error 404. No Record Found.');
                return redirect(route('kiosk.index'));
            }
            return view('kiosks.search')->with('permit', $permit);       
        }

        if(isset($request->lname) && isset($request->fname)) {
            try {
            $permit = Permit::where('lname',$request->lname)->where('fname',$request->fname)->firstorfail();
            } catch (ModelNotFoundException $exception) {
                session()->flash('error', 'Error 404. No Record Found.');
                return redirect(route('kiosk.index'));
            }
            return view('kiosks.search')->with('permit', $permit);       
        }

        // return view('welcome');

    }


        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simplestore(Request $request)
    {
        //
        //  dd(request()->all());

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

        // flash message
        session()->flash('success', 'Permit created successfully.');

        // dd($permit->all());
        //redirect user
        return redirect('thankyou/' . $permit->id);
    }

    public function thankyou(Permit $permit) {
        return view('kiosks.thankyou')->with('permit', $permit);
    }

    public function downloadbuildingPDF(Permit $permit)
    {
       // This  $data array will be passed to our PDF blade
    //    dd($permit);
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
          'application_id' => $permit->application_id,
          'fname' => $permit->fname,    
          'lname' => $permit->lname,    
          'mi_name' => $permit->mi_name,    
          'tin' => $permit->tin,
          'zipcode' => $permit->zipcode,
          'telephone' => $permit->telephone,
          'loc_lot' => $permit->loc_lot,
          'loc_blk' => $permit->loc_blk,
          'tct' => $permit->tct,
          'taxdec' => $permit->taxdec,
          'loc_street' => $permit->loc_street,
          'barangay' => $permit->barangay->name,
          'storeys' => $permit->storeys,
          'ownerform' => $permit->ownerform,
          'storeys' => $permit->storeys,
          'start' => $permit->start,
          'end' => $permit->end,
          'floorarea' => $permit->floorarea,
          'cost' => $permit->cost,
          'address' => $permit->address
        
        
        
        
        
        ];            
        $pdf = PDF::loadView('pdfs.pdf_view', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_B' . $permit->application_id . '.pdf');
    }

    public function downloadCivilPDF(Permit $permit)
    {
       // This  $data array will be passed to our PDF blade
    //    dd($permit);
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
          'application_id' => $permit->application_id,
          'fname' => $permit->fname,    
          'lname' => $permit->lname,    
          'mi_name' => $permit->mi_name,    
          'tin' => $permit->tin,
          'zipcode' => $permit->zipcode,
          'telephone' => $permit->telephone,
          'loc_lot' => $permit->loc_lot,
          'loc_blk' => $permit->loc_blk,
          'tct' => $permit->tct,
          'taxdec' => $permit->taxdec,
          'loc_street' => $permit->loc_street,
          'barangay' => $permit->barangay->name,
          'storeys' => $permit->storeys,
          'ownerform' => $permit->ownerform,
          'storeys' => $permit->storeys,
          'start' => $permit->start,
          'end' => $permit->end,
          'floorarea' => $permit->floorarea,
          'cost' => $permit->cost,
          'address' => $permit->address
        
        
        
        
        
        ];            

        $pdf = PDF::loadView('pdfs.nbc_form_a02_civil', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_a02_civil_' . $permit->application_id . '.pdf');

    }

    public function downloadMechanicalPDF(Permit $permit)
    {
       // This  $data array will be passed to our PDF blade
    //    dd($permit);
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
          'application_id' => $permit->application_id,
          'fname' => $permit->fname,    
          'lname' => $permit->lname,    
          'mi_name' => $permit->mi_name,    
          'tin' => $permit->tin,
          'zipcode' => $permit->zipcode,
          'telephone' => $permit->telephone,
          'loc_lot' => $permit->loc_lot,
          'loc_blk' => $permit->loc_blk,
          'tct' => $permit->tct,
          'taxdec' => $permit->taxdec,
          'loc_street' => $permit->loc_street,
          'barangay' => $permit->barangay->name,
          'storeys' => $permit->storeys,
          'ownerform' => $permit->ownerform,
          'storeys' => $permit->storeys,
          'start' => $permit->start,
          'end' => $permit->end,
          'floorarea' => $permit->floorarea,
          'cost' => $permit->cost,
          'address' => $permit->address
        
        
        
        
        
        ];            

        $pdf = PDF::loadView('pdfs.nbc_form_a04_mecha', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_a04_mechanical_' . $permit->application_id . '.pdf');
    }

    public function downloadElectricalPDF(Permit $permit)
    {
       // This  $data array will be passed to our PDF blade
    //    dd($permit);
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
          'application_id' => $permit->application_id,
          'fname' => $permit->fname,    
          'lname' => $permit->lname,    
          'mi_name' => $permit->mi_name,    
          'tin' => $permit->tin,
          'zipcode' => $permit->zipcode,
          'telephone' => $permit->telephone,
          'loc_lot' => $permit->loc_lot,
          'loc_blk' => $permit->loc_blk,
          'tct' => $permit->tct,
          'taxdec' => $permit->taxdec,
          'loc_street' => $permit->loc_street,
          'barangay' => $permit->barangay->name,
          'storeys' => $permit->storeys,
          'ownerform' => $permit->ownerform,
          'storeys' => $permit->storeys,
          'start' => $permit->start,
          'end' => $permit->end,
          'floorarea' => $permit->floorarea,
          'cost' => $permit->cost,
          'address' => $permit->address
        
        
        
        
        
        ];            

        $pdf = PDF::loadView('pdfs.nbc_form_a03_trical', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_a03_electrical_' . $permit->application_id . '.pdf');
    }

    public function downloadElectronicsPDF(Permit $permit)
    {
       // This  $data array will be passed to our PDF blade
    //    dd($permit);
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
          'application_id' => $permit->application_id,
          'fname' => $permit->fname,    
          'lname' => $permit->lname,    
          'mi_name' => $permit->mi_name,    
          'tin' => $permit->tin,
          'zipcode' => $permit->zipcode,
          'telephone' => $permit->telephone,
          'loc_lot' => $permit->loc_lot,
          'loc_blk' => $permit->loc_blk,
          'tct' => $permit->tct,
          'taxdec' => $permit->taxdec,
          'loc_street' => $permit->loc_street,
          'barangay' => $permit->barangay->name,
          'storeys' => $permit->storeys,
          'ownerform' => $permit->ownerform,
          'storeys' => $permit->storeys,
          'start' => $permit->start,
          'end' => $permit->end,
          'floorarea' => $permit->floorarea,
          'cost' => $permit->cost,
          'address' => $permit->address
        
        
        
        
        
        ];            

        $pdf = PDF::loadView('pdfs.nbc_form_a07_tronic', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_a07_electronics_' . $permit->application_id . '.pdf');
    }


    public function downloadPlumbingPDF(Permit $permit)
    {
       // This  $data array will be passed to our PDF blade
        //    dd($permit);
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR BUILDING PERMIT',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
          'application_id' => $permit->application_id,
          'fname' => $permit->fname,    
          'lname' => $permit->lname,    
          'mi_name' => $permit->mi_name,    
          'tin' => $permit->tin,
          'zipcode' => $permit->zipcode,
          'telephone' => $permit->telephone,
          'loc_lot' => $permit->loc_lot,
          'loc_blk' => $permit->loc_blk,
          'tct' => $permit->tct,
          'taxdec' => $permit->taxdec,
          'loc_street' => $permit->loc_street,
          'barangay' => $permit->barangay->name,
          'storeys' => $permit->storeys,
          'ownerform' => $permit->ownerform,
          'storeys' => $permit->storeys,
          'start' => $permit->start,
          'end' => $permit->end,
          'floorarea' => $permit->floorarea,
          'cost' => $permit->cost,
          'address' => $permit->address
        
        
        
        
        
        ];            

        $pdf = PDF::loadView('pdfs.nbc_form_a06_plumb', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('nbc_form_a06_plumbing_' . $permit->application_id . '.pdf');
    }

    public function downloadOccupancyPDF(Permit $permit)
    {
       // This  $data array will be passed to our PDF blade
        //    dd($permit);
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'APPLICATION FOR OCCUPANCY CERTIFICATE',
          'headingtwo' => 'This should be the second page',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
          'application_id' => $permit->application_id,
          'fname' => $permit->fname,    
          'lname' => $permit->lname,    
          'mi_name' => $permit->mi_name,    
          'tin' => $permit->tin,
          'zipcode' => $permit->zipcode,
          'telephone' => $permit->telephone,
          'loc_lot' => $permit->loc_lot,
          'loc_blk' => $permit->loc_blk,
          'tct' => $permit->tct,
          'taxdec' => $permit->taxdec,
          'loc_street' => $permit->loc_street,
          'barangay' => $permit->barangay->name,
          'storeys' => $permit->storeys,
          'ownerform' => $permit->ownerform,
          'storeys' => $permit->storeys,
          'start' => $permit->start,
          'end' => $permit->end,
          'floorarea' => $permit->floorarea,
          'cost' => $permit->cost,
          'address' => $permit->address
        
        
        
        
        
        ];            

        $pdf = PDF::loadView('pdfs.nbc_form_occupancy', $data)->setPaper('legal',  'portrait');  
        return $pdf->download('occupancy_certificate_' . $permit->application_id . '.pdf');
    }


    public function About() {
        return view('kiosks.about');
    }

    
    public function Faq() {
        return view('kiosks.faq');
    }

}
