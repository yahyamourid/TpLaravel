<?php

// app/Http/Controllers/ChartController.php

namespace App\Http\Controllers;

use App\Models\salle;
use App\Models\machine;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $salles = salle::all();
        $data = array();
        
        foreach ($salles as $salle) {
            $count = machine::where('salleid', $salle->id)->count();
            $data[$salle->libelle] = $count;
        }
        
        return view('charts.index', compact('data'));
    }
}
