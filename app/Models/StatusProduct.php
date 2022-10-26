<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusProduct extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'status_products';

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function Products(){
        return $this->belongsTo(Products::class);
    }

    protected $dates = ['waktu'];
}
