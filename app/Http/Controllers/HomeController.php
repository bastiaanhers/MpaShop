<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Catagory;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::getAllProducts();
        $catagories =Catagory::getAllCatagories();
        return view('home', [ 'products'=>$products, 'catagories'=>$catagories]);
    }
}
