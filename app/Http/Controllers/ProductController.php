<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function homepage(Product $images){
        return view('homepage', ['data' => Product::all(), 'category' => 'All']);
    }

    public function getMenProducts(){
        $product = new Product;
        return view('homepage', ['data' => $product->where('categories', '=', 'Dla Niego')->get(), 'category' => 'Men']);
    }

    public function getWomenProducts(){
        $product = new Product;
        return view('homepage', ['data' => $product->where('categories', '=', 'Dla Niej')->get(), 'category' => 'Women']);
    }

    public function getAccessories(){
        $product = new Product;
        return view('homepage', ['data' => $product->where('categories', '=', 'Akcesoria')->get(), 'category' => 'Accesories']);
    }
}
