<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Cart extends Model
{
    use HasFactory;

    public static function getCartItems(){
        if(Auth::check()){
            $getCartItems = Cart::where('user_id', Auth::user()->id)->get()->toArray();
        } 
        return $getCartItems;
    }
}
