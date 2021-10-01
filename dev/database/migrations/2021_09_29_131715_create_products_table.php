<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            //$table->foreignId('category_id')->references('id')->on('product_categories');
            $table->integer('category_id');
            $table->string('codigo_producto');
            $table->string('color');
            $table->string('nombre_producto');
            $table->string('peso');
            $table->string('precio');
            $table->string('stock');
            $table->string('tamano');
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
