<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/facade-test', function () {
    $date = DateClass::detaFormateYMD('10/20/2022');
    return $date;
    dd("Hello there");
});

Route::get('/new',[TestController::class,'index']);
Route::get('/send-email',[TestController::class,'sendMail']);


// Route::any('{slug}',function(){
//     return view('welcome');
// });

Route::get('/{pathMatch}',  function(){
    return view('welcome');
})->where('pathMatch',".*");
