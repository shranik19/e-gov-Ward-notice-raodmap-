<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use Illuminate\Http\Request;

class BirthController extends Controller
{
    public function show(){
        $brith=Birth::all();
        return view('birth',[
            'birth'=>$brith,
        ]);
    }
}
