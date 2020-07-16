<?php

namespace App\Services;

use App\Product;

class ProductService
{
    public static function getAll(){
        $products = Product::all();
        $productsArray = [];
        foreach ($products as $product){
            $productsArray[] = (object)[
                "id" => $product->id,
                "name" => $product->name,
                "price" => $product->price,
                "weight" => $product->weight,
            ];
        }
        return json_encode($productsArray);
    }
}

