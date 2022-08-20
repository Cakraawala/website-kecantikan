<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'checkouts';

    public function carts(){
        return $this->belongsTo(Cart::class, 'carts_id');
    }
    public function users(){
        return $this->belongsTo(User::class, 'users_id');
    }
    public function payments(){
        return $this->belongsTo(Payments::class, 'payments_id');
    }
    public function deliveries(){
        return $this->belongsTo(Delivery::class, 'deliveries_id');
    }
}
