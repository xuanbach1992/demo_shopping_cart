<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function show()
    {
        $products = Product::all();
        return view("product.list", compact("products"));
    }
}
