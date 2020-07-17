<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function index(){

        $products = ProductService::getAll();

        return view('products.index', [
            "products" => $products
        ]);
    }

    public function create(){
        return view('products.create');
    }
}
