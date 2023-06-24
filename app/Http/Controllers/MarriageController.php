<?php

namespace App\Http\Controllers;

use App\Models\Marriage;
use Illuminate\Http\Request;

class MarriageController extends Controller
{
    public function show(){
        $marriage=Marriage::all();
        return view('marriage',[
            'marriage'=>$marriage
        ]);
    }
}
