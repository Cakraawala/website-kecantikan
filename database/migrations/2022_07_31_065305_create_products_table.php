<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_products');
            $table->bigInteger('category_products_id')->unsigned()->index();
            $table->foreign('category_products_id')->references('id')->on('category_products')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('quantity')->default(1);
            $table->string('price');
            $table->string('suppliers');
            $table->string('address');
            $table->integer('reviews')->default(0);
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
};
