<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Http\Requests\States\CreateStateRequest;
use App\Http\Requests\States\UpdateStateRequest;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('states.index')->with('states', State::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('states.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStateRequest $request)
    {
        //

        State::create([
            'name' => $request->name
        ]);

        session()->flash('success', 'State created successfully.');

        return redirect(route('states.index'));
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
    public function edit(State $state)
    {
        //
        return view('states.create')->with('state', $state);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStateRequest $request, State $state)
    {
        //
        $state->update([
            'name' => $request->name
        ]);
        // old way
        // $state->name = $request->name;
        // $state->save();

        session()->flash('success', 'State updated successfully.');

        return redirect(route('states.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        //
        if($state->permits->count() > 0){
            session()->flash('error', 'State cannot be deleted. It is currently used by Permit records.');

            return redirect()->back();
        }



        $state->delete();
        session()->flash('success', 'State deleted successfully.');

        return redirect(route('states.index'));

    }
}
