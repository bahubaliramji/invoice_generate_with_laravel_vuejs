<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function allProdcuts(){
        $products = Product::orderBy('id','DESC')->get();
        return response()->json([
            'products' => $products
        ],200);
    }
}
