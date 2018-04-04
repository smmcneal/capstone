<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function getIndex()
    {
       $products = products::all();
        return view('shop.index', ['products' => $products]);
    }
}
