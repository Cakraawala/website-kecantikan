<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'deliveries';
    protected $deliveries;

    public function checkouts(){
        return $this->hasMany(Checkout::class, 'checkouts_id');
    }
}
