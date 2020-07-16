<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = [
            (object)[
                "id" => 1,
                "name" => "Teste",
                "price" => "10.00",
                "weight" => "25.50",
            ],
            (object)[
                "id" => 2,
                "name" => "Teste 2",
                "price" => "20.00",
                "weight" => "35.70",
            ],
        ];

        return view('products.index', [
            "products" => json_encode($products)
        ]);
    }
}
