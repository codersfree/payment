<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::paginate(9);

        return view('welcome', compact('products'));
    }

    public function pay(Product $product){
        return view('products.pay', compact('product'));
    }
}
