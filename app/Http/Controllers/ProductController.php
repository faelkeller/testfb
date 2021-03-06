<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Requests\StoreProduct;

class ProductController extends Controller
{
    public function index(){
        return ProductService::getAll();
    }

    public function create(){
        return view('products.create');
    }

    public function store(StoreProduct $request){

        $data = $request->all();

        $product = ProductService::store($data);

        return ($product === true) ? response()->json('The product successfully added') : response()->json('Error product add', 400);
    }
}
