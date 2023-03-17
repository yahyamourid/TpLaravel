<?php

namespace App\Http\Controllers;

use App\Models\salle;
use App\Models\Request;


class ListController extends Controller
{
    public function index()
    {
        $salles = salle::all();
        return view('lists.index', compact('salles'));
        
    }
  
}