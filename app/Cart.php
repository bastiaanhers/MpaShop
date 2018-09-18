<?php

namespace App;
use Session;


class Cart
{
    public $items= [];
    public $totalAmount = 0;


    public function __construct(){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalAmount = $oldCart->totalAmount;
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
                   $this->totalAmount++;
                   $idIsThere = true;
               }
            }
            if(!$idIsThere){
            $this->totalAmount++;    
            array_push($this->items, $storedItem);
            }
        }else{ 
            $this->totalAmount++;    
            array_push($this->items, $storedItem);
        }

    }
}
