<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function show(){

        $notices=Notice::orderBy('created_at','desc')->get();
        return view('notice',[
            'notices'=>$notices
        ]);
    }

}
