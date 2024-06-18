<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains= Train::where('departure_time', '>=' , now())
        ->where('cancelled', 0)
        ->orderBy('departure_time')
        ->get();
        // dd($trains);
        return view('trains', compact('trains'));
    }
}
