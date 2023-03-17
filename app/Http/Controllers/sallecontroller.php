<?php

namespace App\Http\Controllers;


use App\Models\salle;
use Illuminate\Http\Request;

class sallecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salles=salle::all();
        return view('salles.index')->with(['salles'=>$salles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['code'=>'required','libelle'=>'required |unique:salles,libelle']);
        salle::create($request->except('_token'));
        return redirect()->route('salles.index')->with(['success'=>'Salle ajoutée avec succès']);
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
    public function edit($id)
    {
        //
        $salle=salle::where('id',$id)->first();
        return view('salles.edit')->with(['salle'=>$salle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $salle=salle::where('id',$id)->first();
        $this->validate($request,['code'=>'required','libelle'=>'required|unique:salles,libelle']);
        $salle->update($request->except('_token','_method'));
        return redirect()->route('salles.index')->with(['success'=>' Salle  modifée avec succès']);
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
        $salle=salle::where('id',$id)->first();
        $salle->delete();
        return redirect()->route('salles.index')->with(['success'=>'Salle suprimée avec succès']);
    }
}
