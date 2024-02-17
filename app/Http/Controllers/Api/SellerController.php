<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function cart(Request $req)
    {

        if(Auth::id())
        {
            $id=Auth::user()->id;

//            $cart = Cart::where('user_id', '=', $id)->get();
//            $carts=Cart::where('user_id', '=', $id)->count();

            return view('Home.cart');
        }
        else
        {
            return view('auth.login');
        }
    }
}
