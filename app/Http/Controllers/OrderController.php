<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function index (){
        return OrderService::getAll();
    }

    public function store(){

        $order = OrderService::store();

        return ($order) ? response()->json($order) : response()->json('Error order add', 400);
    }

    public function storeProduct($orderId, $productId){
        if ($orderId == "" || $productId == ""){
            response()->json('Error attach product in order', 400);
        }

        $product = OrderService::attachProduct($orderId, $productId);

        return ($product) ? response()->json($product) : response()->json('Error attach product in order', 400);
    }


}
