<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use App\Cart;
use App\User;
use App\Order;

class orderController extends Controller
{
    public function createOrder(Request $request){  
        if($this->middleware('auth')){
            $cart = $request->session()->get('cart');
            $order = new Order;

            $order->createOrder($cart);
            return redirect()->route('user.page');
        }else{
            return redirect()->route('cart.view');
        }
    }
}
