<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function homepage(Product $images){
        return view('homepage', ['data' => Product::all()]);
    }
}
