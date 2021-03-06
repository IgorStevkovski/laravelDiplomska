<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('price');
            $table->text('description');
            $table->string('imageUrl');
            $table->integer('gender');
            $table->string('brandName');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}
