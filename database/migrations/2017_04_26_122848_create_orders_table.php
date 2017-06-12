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
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->timestamp('data');//data na kreiranje na order-ot
            $table->text('cart');
            $table->text('address');
            $table->string('name');
            $table->string('payment_id');//se vrakja od stripe serverot pri pravenje na transakcija,
            // i moze da go cuvame, i match-uvame toa id so order id-to
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
