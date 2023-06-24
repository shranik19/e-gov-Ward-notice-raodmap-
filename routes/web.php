<?php

use App\Http\Controllers\BirthController;
use App\Http\Controllers\CitizenshipController;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\NoticeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home',function()
{
    return view('home');
}
);
Route::get('/notice',[
    NoticeController::class,'show'
]
);
Route::get('/event',[
    EventController::class,'show'
]
);
Route::get('/service',function()
{
    return view('service');
}
);
Route::get('/contact',function()
{
    return view('contact');
}
);
Route::get('/form',function()
{
    return view('form');
}
);
Route::get('/roadmap',function()
{
    return view('roadmap');
}
);
Route::get('/citizenship',[
    CitizenshipController::class,'show'
]
);
Route::get('/birth',[
    BirthController::class,'show'
]
);
Route::get('/death',[
    DeathController::class,'show'
]
);
Route::get('/marriage',[
    MarriageController::class,'show'
]
);
Route::get('/national',[
    NationalController::class,'show'
]
);
Route::get('/thankyou',function(){
    return view('thankyou');
});

// =============post request======
Route::post('/form',[FormController::class,'store'])->name('form.store');