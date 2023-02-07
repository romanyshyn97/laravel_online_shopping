<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function products(){
        return view('products', ['data' => Product::all(), 'category' => 'all']);
    }

    public function getMenProducts(){
        $product = new Product;
        return view('products', ['data' => $product->where('categories', '=', 'Dla Niego')->get(), 'category' => 'men']);
    }

    public function getWomenProducts(){
        $product = new Product;
        return view('products', ['data' => $product->where('categories', '=', 'Dla Niej')->get(), 'category' => 'women']);
    }

    public function getAccessories(){
        $product = new Product;
        return view('products', ['data' => $product->where('categories', '=', 'Akcesoria')->get(), 'category' => 'accesories']);
    }

    public function showSingleProduct(Product $product){
        $products = new Product;
        return view('single-product', ['data' => $products->where('id', '=', $product->id)->get()]);
    }
}
