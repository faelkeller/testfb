<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['order_status_id'];

    public function order_status()
    {
        return $this->belongsTo('App\OrderStatus');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'orders_products');
    }


}
