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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('decriptions');
            $table->string('image');
            $table->integer('price');
            $table->unsignedInteger('mf_id');
            $table->foreign('mf_id')->references('id')->on('manufactures')->onUpdate('cascade')->onDelete('cascade');
        });
        // Schema::table('cars', function (Blueprint $table) {
        //     $table->integer('price');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('cars');
    }
};
