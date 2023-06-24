<?php

namespace App\Http\Controllers;

use App\Models\Death;
use Illuminate\Http\Request;

class DeathController extends Controller
{
    public function show(){
        $death=Death::all();
        return view('death',[
            'death'=>$death
        ]);
    }
}
