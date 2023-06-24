<?php

namespace App\Http\Controllers;

use App\Models\National;
use Illuminate\Http\Request;

class NationalController extends Controller
{
    public function show(){
        $national=National::all();
        return view('national',[
            'national'=>$national
        ]);
    }
}
