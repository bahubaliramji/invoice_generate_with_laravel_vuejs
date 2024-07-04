<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }
    public function sendMail(){
        $data  = ['name'=>'Amrendra Pratap Singh'];
        //Mail::to('ramjiamrendrapratap@gmail.com')->send(new TestMail($data));
        // dd($res);
        dispatch(new SendEmail($data));
        echo "Mail Sent";
    }
}
