<?php

namespace App;
use Session;


class Cart
{
    public $items= [];



    public function __construct(){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if ($oldCart){
            $this->items = $oldCart->items;
        }
    }

    public function add($item) {
        $storedItem = ['amount' => 1, 'itemId' => $item->id];

        if ($this->items) {
           for($i= 0; $i< count($this->items); $i++) {
               if($this->items[$i]['itemId'] == $item->id){
                   $storedItem = $this->items[$i];
                   $storedItem['amount']++;
                   $this->items[$i] = $storedItem;
                   $idIsThere = true;
               }
            }
            array_push($this->items, $storedItem);
        }
    }

    public static function editAmount($item, $newAmount) {
        $cart = Session::get('cart');

        $storedItem = ['amount' => 1, 'itemId' => $item->id];
        if($newAmount == 0){
            Cart::DeleteItem($item->id);

        }else{
            for($i= 0; $i< count($cart->items); $i++) {
                if($cart->items[$i]['itemId'] == $item->id){
                    //get existing row from cart and change stored amount
                    $storedItem = $cart->items[$i];
                    //change existing row with new amoun
                    $storedItem['amount'] = $newAmount;
                    $cart->items[$i] = $storedItem; 
                    //store row in array and store cart in session
                    array_push($cart->items, $storedItem);
                    session()->put('cart', $cart);
                }
            }
        }
    }

    
    public static function DeleteItem($id){
        $cartForDel = Session::get('cart');

        if (count($cartForDel->items) > 1) {
           for($i= 0; $i< count($cartForDel->items); $i++) {
               if($cartForDel->items[$i]['itemId'] == $id){
                   array_splice($cartForDel->items, $i, $i);
               }
            }
        }else{
            unset($cartForDel->items[0]);
        }

        session()->put('cart', $cartForDel);
    }
    
}
