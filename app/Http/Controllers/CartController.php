<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view(Request $request) {
        $cart = $request->session()->get('cart');

        return view('cart', ['cart' => $cart]);
    }
}
