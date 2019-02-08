<?php

namespace App\Http\Controllers;

use Session;
use App\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Catagory;

class ProductController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = Product::getProductById($id);
        return view('product', [ 'product'=>$product]);
    }

    public function addToCart(Request $request, $id) {
        $product = Product::getProductById($id);
        
        $cart = new Cart();
        $cart->add($product);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
}
