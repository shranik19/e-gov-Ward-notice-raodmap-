<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show()
    {
        $events=Event::orderBy('created_at','desc')->get();
        return view('event',[
            'events'=>$events,
        ]);
    }
}
