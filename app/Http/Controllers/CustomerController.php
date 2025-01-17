<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //
    public function allCustomers(){
        $customers = Customer::orderBy('id','DESC')->get();
        return response()->json([
            'customers' => $customers
        ],200);
    }
}
