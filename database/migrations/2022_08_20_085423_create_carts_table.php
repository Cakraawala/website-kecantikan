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
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('payments_id')->unsigned()->nullable();
            $table->bigInteger('deliveries_id')->unsigned()->nullable();
            $table->string('no_resi')->nullable();
            $table->foreign('users_id')->references('id')
            ->on('users')->onDelete('cascade');
            $table->foreign('payments_id')->references('id')
            ->on('payments')->onDelete('cascade');
            $table->foreign('deliveries_id')->references('id')
            ->on('deliveries')->onDelete('cascade');
            $table->date('tgl')->nullable();
            $table->string('status_pembayaran')->nullable();
            $table->string('status');
            $table->bigInteger('total_delivery')->default(0);
            $table->bigInteger('total_fee')->default(0);
            $table->bigInteger('total_products')->default(0);
            $table->bigInteger('subtotal')->default(0);
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
        Schema::dropIfExists('carts');
    }
};
