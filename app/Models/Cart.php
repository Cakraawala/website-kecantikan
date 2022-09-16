<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'carts';

    // Public function checkouts(){
    //     return $this->hasOne(Checkout::class, 'checkouts_id');
    // }
    public function detail(){
        return $this->hasMany(CartDetail::class, 'carts_id', 'id');
    }
    public function users(){
        return $this->belongsTo(User::class, 'users_id','id');
    }

    public function checkouts(){
        return $this->hasOne(Checkout::class, 'carts_id', 'id');
    }
    // static function new_cart(){
    //     $data = Cart::create([
    //         'status' => 'belum bayar'
    //     ]);
    //     return $data->carts_id;
    // }
}
