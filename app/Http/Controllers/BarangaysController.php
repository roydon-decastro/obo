<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangay;
use App\Http\Requests\Barangays\CreateBarangayRequest;
use App\Http\Requests\Barangays\UpdateBarangayRequest;

class BarangaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('barangays.index')->with('barangays', Barangay::all());
        // return view('layouts.navigations')->with('barangays', Barangay::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barangays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $data = request()->all(); // all data coming from request form
        $brgy = new Barangay(); // Barangay Model
        $brgy->name = $data['name'];
        $brgy->save();

        session()->flash('success', 'Barangay created successfully.');

        return redirect(route('barangays.index'));
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
    public function edit(Barangay $barangay)
    {
        //
        return view('barangays.create')->with('barangay', $barangay);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBarangayRequest $request, Barangay $barangay)
    {
        //
        $barangay->update([
            'name' => $request->name
        ]);
        // old way
        // $barangay->name = $request->name;
        // $barangay->save();

        session()->flash('success', 'Barangay updated successfully.');

        return redirect(route('barangays.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangay $barangay)
    {
        //
        // if($barangay->permits->count() > 0){
        //     session()->flash('error', 'Barangay cannot be deleted. It is currently used by Permit records.');

        //     return redirect()->back();
        // }



        $barangay->delete();
        session()->flash('success', 'Barangay deleted successfully.');

        return redirect(route('barangays.index'));

    }
}
