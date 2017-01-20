<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('order_id')->index();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('category');
            $table->string('brand');
            $table->string('model');
            $table->string('phone');
            $table->string('pickup_address');
            $table->date('pickup_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
