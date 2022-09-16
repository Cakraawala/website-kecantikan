<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'cart_details';

    public function cart(){
        return $this->belongsTo(Cart::class, 'carts_id', 'id');
    }

    public function products(){
        return $this->belongsTo(Products::class);
    }

    static function new_detail_cart($products_id, $carts_id, $quantity){
        CartDetail::create([
        "products_id" => $products_id,
        "carts_id" => $carts_id,
        "quantity" => $quantity
        ]);
    }

}
