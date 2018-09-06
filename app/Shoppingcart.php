<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppingcart{

    private $items = [];
    private $session;

    public function __construct($request){
        //create shoppingcart items from sessi
        $this->session = $request->session();   
    }
    // create shopping card object 
    // getitems(), deleteitems()
    // shoppingcard object voert info aan de controller
    // object houdt zich bezig met waar de info vandaan komt
    // controller verwerkt de info van het object
    //
    
}
