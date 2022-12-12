<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id('favorite_id');
            $table->bigInteger('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('car_id')->references('car_id')->on('cars')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('real_estate_id')->references('real_estate_id')->on('real_estates')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('job_id')->references('job_id')->on('jobs')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('mobile_id')->references('mobile_id')->on('mobiles')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('favorites');
    }
}
