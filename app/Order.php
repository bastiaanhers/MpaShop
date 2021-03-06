<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use App\Product;


class Order extends Model
{
    public static function getOrdersById($userId){

        $allOrdersOfId = DB::table('orders')->where('user_id', $userId)->get();

        return $allOrdersOfId;
    }

    public function createOrder($cart){
        $totalPrice = 0;

        //make order and get id
        $orderId = DB::table('orders')->insertGetId( array( 
            'user_id' => Auth::user()->getId(),
            'total_price' => $totalPrice,
            )
        );
        //foreach item save orderline in DB and calculate total price 
        foreach($cart->items as $cartItem){
            $productInfo = Product::getProductById($cartItem['itemId']);

            $price = $cartItem['amount'] * $productInfo->price;

            $orderLine = DB::table('orderlines')->insert(array(
                'order_id' => $orderId,
                'item_id' => $cartItem['itemId'], 
                'price' => $price,
                'amount' => $cartItem['amount']
            ));
            $totalPrice = $totalPrice + $price;
        }
        //give order DB a totalprice
        $affected = DB::update('update orders set total_price = ? where id = ?', [$totalPrice,$orderId]);
        Session::forget('cart');

    }
}
