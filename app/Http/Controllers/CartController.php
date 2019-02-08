<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CartController extends Controller
{ 
    public function view(Request $request) {
        $cart = new Cart;
        $cartItems = $cart->getItems();
        return view('cart', ['cart' => $cart, 'products' => $cartItems]);
    }
    
    public function DeleteItem($delId){
        $cart = new Cart;
        $cart->deleteItem($delId);
        return redirect()->route('cart.view');
    }

    public function editAmount($editId, $newAmount){
        $cart = new Cart;
        $cart->editAmount($editId, $newAmount);
        return redirect()->route('cart.view');

    }

}
