<?php

namespace App\Http\Controllers;

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
}
