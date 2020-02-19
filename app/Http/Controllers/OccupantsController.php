<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Occupant;
use App\Http\Requests\Occupants\CreateOccupantRequest;
use App\Http\Requests\Occupants\UpdateOccupantRequest;

class OccupantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('occupants.index')->with('occupants', Occupant::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('occupants.create');
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
        $occupant = new Occupant(); // Occupant Model
        $occupant->name = $data['name'];
        $occupant->save();

        session()->flash('success', 'Occupant created successfully.');

        return redirect(route('occupants.index'));
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
    public function edit(Occupant $occupant)
    {
        //
        return view('occupants.create')->with('occupant', $occupant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOccupantRequest $request, Occupant $occupant)
    {
        //
        $occupant->update([
            'name' => $request->name
        ]);
        // old way
        // $occupant->name = $request->name;
        // $occupant->save();

        session()->flash('success', 'Occupant updated successfully.');

        return redirect(route('occupants.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Occupant $occupant)
    {
        //
        // if($occupant->permits->count() > 0){
        //     session()->flash('error', 'Occupant cannot be deleted. It is currently used by Permit records.');

        //     return redirect()->back();
        // }



        $occupant->delete();
        session()->flash('success', 'Occupant deleted successfully.');

        return redirect(route('occupants.index'));

    }
}
