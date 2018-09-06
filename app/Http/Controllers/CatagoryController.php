<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Catagory;

class catagoryController extends Controller
{
    public function index($id)
    {   
        $catagories = Catagory::getAllCatagories();
        $products = Product::getProductsByCatId($id);
       
        return view('catagory', ['products'=>$products, 'catagories'=>$catagories,'cat'=>$id]);
    }
}
