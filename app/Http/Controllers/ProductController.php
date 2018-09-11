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
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product->first(), $id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('home.index');
    }
}
