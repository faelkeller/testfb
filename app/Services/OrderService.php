<?php

namespace App\Services;

use App\Order;
use App\Product;

class OrderService
{
    public static function getAll(){
        $orders = Order::orderBy("id", "desc")->get();

        $arr = [];

        foreach($orders as $order){
            $arr[] = (object)[
                "id" => $order->id,
                "status" => $order->order_status->name,
                "created_at" => date('d/m/Y H:i:s', strtotime($order->created_at))
            ];
        }

        return $arr;
    }

    public static function store(){
        $order = new Order(["order_status_id" => 1]);
        $order->save();
        return ($order->id) ? (object)["id" => $order->id] : false;
    }

    public static function attachProduct($orderId, $productId){
        $order = Order::findOrFail($orderId);
        $product = Product::findOrFail($productId);
        $order->products()->attach([$productId]);
        return $product;
    }
}

