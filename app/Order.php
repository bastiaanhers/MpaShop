<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Illuminate\Support\Facades\DB;
use Auth;


class Order extends Model
{
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

    }
}
