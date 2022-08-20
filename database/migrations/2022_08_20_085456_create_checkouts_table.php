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
            $table->bigInteger('payment')->index()->unsigned();
            $table->bigInteger('delivery')->index()->unsigned();
            $table->integer('subtotal_products');
            $table->integer('subtotal_deliveries');
            $table->integer('subtotal_other');
            $table->integer('total_costs');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('carts_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('payment')->references('id')->on('payments')->onDelete('cascade');
            $table->foreign('delivery')->references('id')->on('deliveries')->onDelete('cascade');
            $table->text('catatan');
            $table->string('no_resi');
            $table->string('status');
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
