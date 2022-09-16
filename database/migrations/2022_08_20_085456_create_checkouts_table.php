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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('carts_id')->index()->unsigned();
            $table->bigInteger('users_id')->unsigned()->index();
            $table->bigInteger('payments_id')->index()->unsigned();
            $table->bigInteger('deliveries_id')->index()->unsigned();
            $table->integer('total_products')->nullable();
            $table->integer('total_delivery')->nullable();
            $table->integer('total_fee')->nullable();
            $table->integer('subtotal')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('carts_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('payments_id')->references('id')->on('payments')->onDelete('cascade');
            $table->foreign('deliveries_id')->references('id')->on('deliveries')->onDelete('cascade');
            $table->string('no_resi')->nullable();
            $table->date('tgl')->nullable();
            $table->string('status');
            $table->string('image')->nullable();
            // $table->text('catatan');
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
        Schema::dropIfExists('checkouts');
    }
};
