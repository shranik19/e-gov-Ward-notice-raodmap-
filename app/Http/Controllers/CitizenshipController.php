<?php

namespace App\Http\Controllers;

use App\Models\Citizenship;
use Illuminate\Http\Request;

class CitizenshipController extends Controller
{
    public function show(){
        $citizenship=Citizenship::all();
        return view('citizenship',[
            'citizenship'=>$citizenship
        ]);
    }
}
