<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Support\Facades\Blade;

class SellerController extends Controller
{
    function sell(){
        return Seller::find(1)->productData;
    }
    function manyRel(){
        return Seller::find(1)->ManyData;
    }
    function manyToOne(){
        // return Product::all();
        $data = Product::with('seller')->get();
        return $data;
    }
    function manyToMany()
    {
        $seller = Seller::with('products')->get();
        return $seller;
    }

    function inline() {
        $totalProduct = 20;
        return Blade::render(
            '<h1 style="color:green">{{$total}} Products List</h1>',
            ['total' => $totalProduct]    
        );
    }

}
