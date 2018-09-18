<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
}
