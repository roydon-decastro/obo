<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scope;
use App\Http\Requests\Scopes\CreateScopeRequest;
use App\Http\Requests\Scopes\UpdateScopeRequest;

class ScopesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('scopes.index')->with('scopes', Scope::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('scopes.create');
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
        $scope = new Scope(); // Scope Model
        $scope->name = $data['name'];
        $scope->save();

        session()->flash('success', 'Scope created successfully.');

        return redirect(route('scopes.index'));
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
    public function edit(Scope $scope)
    {
        //
        return view('scopes.create')->with('scope', $scope);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScopeRequest $request, Scope $scope)
    {
        //
        $scope->update([
            'name' => $request->name
        ]);
        // old way
        // $scope->name = $request->name;
        // $scope->save();

        session()->flash('success', 'Scope updated successfully.');

        return redirect(route('scopes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scope $scope)
    {
        //
        // if($scope->permits->count() > 0){
        //     session()->flash('error', 'Scope cannot be deleted. It is currently used by Permit records.');

        //     return redirect()->back();
        // }



        $scope->delete();
        session()->flash('success', 'Scope deleted successfully.');

        return redirect(route('scopes.index'));

    }
}
