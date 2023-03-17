<?php

namespace App\Http\Controllers;

use App\Models\machine;
use App\Models\salle;
use Illuminate\Http\Request;

class machinecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $machines=machine::all();
        return view('machines.index')->with(['machines'=>$machines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $salles = salle::all();
        return view('machines.create',compact('salles'));
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
        $this->validate($request,['reference'=>'required','marque'=>'required','dateAchat'=>'required','prix'=>'required','salleid'=>'required']);
        machine::create($request->except('_token'));
        return redirect()->route('machines.index')->with(['success'=>'Machine ajoutée avec succès']);
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
        $machine=machine::where('id',$id)->first();
        return view('machines.edit')->with(['machine'=>$machine]);
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
        $machine=machine::where('id',$id)->first();
        $this->validate($request,['reference'=>'required','marque'=>'required','dateAchat'=>'required','prix'=>'required','salleid'=>'required']);
        $machine->update($request->except('_token','_method'));
        return redirect()->route('machines.index')->with(['success'=>'Machine modifiée avec succès']);
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
        $machine=machine::where('id',$id)->first();
        $machine->delete();
        return redirect()->route('machines.index')->with(['success'=>'Machine suprimée avec succès']);
    }
}
