<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function productData()
    {
        return $this->hasOne('App\Models\Product');
    }
    public function ManyData()
    {
        return $this->hasMany('App\Models\Product');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_seller');
    }

}
