<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_status', function (Blueprint $table) {
            $table->tinyIncrements("id");
            $table->string("name", 25);
            $table->timestamps();
        });

        $names = ["Orçamento", "Pedido"];

        foreach ($names as $name){
            DB::table('orders_status')->insert(array("name" => "$name", "created_at" => \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_status');
    }
}
