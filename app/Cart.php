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
        $idIsThere = false;
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
            if(!$idIsThere){
            array_push($this->items, $storedItem);
            }
        }else{ 
            array_push($this->items, $storedItem);
        }
    }
    
    public static function DeleteItem($delId){
        $cartForDel = Session::get('cart');

        if (count($cartForDel->items) > 1) {
           for($i= 0; $i< count($cartForDel->items); $i++) {
               if($cartForDel->items[$i]['itemId'] == $delId){
                   array_splice($cartForDel->items, $i, 1);
               }
            }
        }else{
            unset($cartForDel->items[0]);
        }
        session()->put('cart', $cartForDel);
    }
    
    public static function editAmount($editId, $newAmount) {
        $cart = Session::get('cart');
        if($newAmount == 0){
            Cart::DeleteItem($editId);
         }else{
            for($i= 0; $i< count($cart->items); $i++) {
                if($cart->items[$i]['itemId'] == $editId){
                    //get existing row from cart and change stored amount
                    $storedItem = $cart->items[$i];
                    //change existing row with new amoun
                    $storedItem['amount'] = $newAmount;
                    $cart->items[$i] = $storedItem; 
                    //store row in array and store cart in session
                    session()->put('cart', $cart);
                }else{
                    echo "error";
                }
            }
        }
    }
}
