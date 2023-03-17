<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\machine;
use App\Models\salle;


class MController extends Controller
{
    public function index(Request $request)
    {
       $salleid = $request->input('salle_id');
        $machines = machine::where('salleid',$salleid )->get();
        $salles = salle::where('id',$salleid )->get('libelle');

       
        return view('mshow.index', compact('machines'),compact('salles'));
    }
}
