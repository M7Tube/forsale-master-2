<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeighborhoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neighborhoods', function (Blueprint $table) {
            $table->id('neighborhood_id');
            $table->string('en_name');
            $table->string('ar_name');
            $table->bigInteger('governorate_id')->references('governorate_id')->on('governorates')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('area_id')->references('area_id')->on('areas')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('neighborhoods');
    }
}
