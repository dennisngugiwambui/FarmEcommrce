<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function cart()
    {
        return view('Home.cart');

    }

    public function productDetail()
    {
        return view('Home.ProductDetails');
    }
}
