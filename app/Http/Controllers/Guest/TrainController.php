<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('departure_time','<','2023-02-10 23:59:59')->get();
    return view('home', compact('trains'));
    }
}
