<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('landing-page')->with('products', $products);
    }


}
