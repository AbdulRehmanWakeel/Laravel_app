<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    function seller(){
        return $this->belongsTo('App\Models\Seller');

    }
    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'product_seller');
    }
}
