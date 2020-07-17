<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function index(){
        return ProductService::getAll();
    }

    public function create(){
        return view('products.create');
    }
}
