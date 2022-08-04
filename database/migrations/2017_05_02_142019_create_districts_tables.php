<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('regency_id')->unsigned();
            $table->string('name');
            $table->foreign('regency_id')->references('id')->on('regencies')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('districts');
    }
}
