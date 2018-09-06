<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Catagory extends Model
{
    public static function getAllCatagories(){
        $catagories = DB::table('catagories')->get();
        return $catagories;        
    }
    
}
