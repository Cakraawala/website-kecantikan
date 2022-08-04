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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('no_wa');
            $table->string('email')->nullable()->unique();
            $table->date('tgl_lhr');
            $table->enum('jk',['?','L', 'P'])->default('?');
            $table->bigInteger('province_id')->index()->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->bigInteger('regency_id')->index()->unsigned();
            $table->foreign('regency_id')->references('id')->on('regencies')->onDelete('cascade');
            $table->bigInteger('district_id')->index()->unsigned();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->integer('code_pos')->nullable();
            $table->longText('address');
            $table->string('password');
            $table->string('photo_img')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
