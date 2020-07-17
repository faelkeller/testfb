<?php

namespace App\Services;

use App\Product;

class ProductService
{
    public static function getAll(){
        $products = Product::all()->toArray();
        return array_reverse($products);
    }
}

