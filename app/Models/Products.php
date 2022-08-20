<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'products';
    protected $products;

    public function CategoryProduct(){
        return $this->belongsTo(CategoryProduct::class,'category_products_id', 'id');
    }

    public function cartdetails(){
        return $this->hasMany(CartDetails::class);
    }

    public static function find($slug){
        $products = static::all();
        return $products->firstWhere('slug' , $slug);
    }
}
