<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalAmount = 0;
    public $price = 0;

    public function __construct($oldCart){
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalAmount = $oldCart->totalAmount;
            $this->price = $oldCart->price;
        }
    }

    public function add($item, $id) {
        $storedItem = ['amount' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
           if(array_key_exists($id, $this->items)) {
               $items = $this->items[$id];
           }
        }
        $storedItem['amount']++;
        $storedItem['price'] = $this->price * $storedItem['amount'];
        $this->items[$id] = $storedItem;
        $this->totalAmount++;
        $this->price += $item->price;
    }
}
