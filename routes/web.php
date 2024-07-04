<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new',[TestController::class,'index']);
Route::get('/send-email',[TestController::class,'sendMail']);


// Route::any('{slug}',function(){
//     return view('welcome');
// });

Route::get('/{pathMatch}',  function(){
    return view('welcome');
})->where('pathMatch',".*");
