<?php

namespace App\Services;

use App\Order;

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
}

