<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->double('price')->default('0.00');
            $table->double('discounted_price')->default('0.00');
            $table->string('image')->nullable(); // Stores the name of the product’s picture file
            $table->string('image_2')->nullable(); // Stores the name of a second picture of the product
            $table->string('thumbnail')->nullable();
            $table->tinyInteger('display')->default(0);
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
        Schema::dropIfExists('products');
    }
}
