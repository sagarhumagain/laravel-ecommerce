<?php

namespace App\Models;
use Gloudemans\Shoppingcart\Facades\Cart; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // public function presentPrice(){
    //     return money_format('$%i', $this->price / 100);
    // }

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
}
