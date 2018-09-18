<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Product;


class Product extends Model
{

    public static function getAllProducts(){
        $products = DB::table('products')->get();
        return $products;        
    }

    public static function getProductsByCatId($catId){
        $products = Product::getAllProducts();
        $productsOfcatagory = [];

        foreach($products as $product){
            if($product->id == $catId){
                array_push($productsOfcatagory, $product);
            }
        }
        return $productsOfcatagory;
        
    }
    public static function getProductById($id){
        $product = DB::table('products')->where('id', $id)->first();
        return $product;
    }
    
}
