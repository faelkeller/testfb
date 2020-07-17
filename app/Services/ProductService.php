<?php

namespace App\Services;

use App\Product;

class ProductService
{
    public static function getAll(){
        $products = Product::all()->toArray();
        return array_reverse($products);
    }
    public static function store($data){
        $product = new Product($data);
        $product->save();
        return ($product->id) ? true : false;
    }
}

