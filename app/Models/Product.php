<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function getProductStock($id){
        $getProductStock = Product::select('quantity')->where(['id'=>$id])->first();
        return $getProductStock->quantity;
    }
}
