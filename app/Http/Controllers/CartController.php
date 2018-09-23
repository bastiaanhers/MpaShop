<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    public function view(Request $request) {
        $cart = $request->session()->get('cart');
        $productsInCart=[];
        if(!empty($cart)){
            foreach($cart->items as $item){
                array_push($productsInCart, Product::getProductById($item['itemId']));
            }
        }
        return view('cart', ['cart' => $cart, 'products' => $productsInCart]);
    }
    public function DeleteItem($id){
        Cart::deleteItem($id);
        return redirect()->route('cart.view');
    }
    public function editAmount($id, $newAmount){
        $item = Product::getProductById($id);
        Cart::editAmount($item, $newAmount);
        return redirect()->route('cart.view');
    }

}
