<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id('rate_id');
            $table->string('reason');
            $table->integer('rate_from_5');
            $table->integer('category');
            $table->bigInteger('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('ad_id')->references('ad_id')->on('ads')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('rates');
    }
}
