<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function save(Request $request){
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return $product;
    }

    public function display(){
        $product = Product::all();
        return $product;
    }
}
