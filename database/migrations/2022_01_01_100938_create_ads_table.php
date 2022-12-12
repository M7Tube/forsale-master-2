<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id('ad_id');
            $table->string('name');
            $table->string('descriptions');
            $table->string('phone_number');
            $table->string('picture')->nullable();
            $table->integer('is_special');
            $table->integer('price')->nullable();
            $table->integer('manger_accept'); //HERE THIS COULMN CONTAINS (3) VALUE 0-> REJECTED 1-> NEED APPROVAL 2-> ACCEPTED
            $table->string('rejected_reason')->nullable();
            $table->boolean('isPhone_visable');
            $table->integer('manufacturing_year');
            $table->bigInteger('watch_count');
            $table->bigInteger('color_id')->references('color_id')->on('colors')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('ad_type_id')->references('ad_type_id')->on('ad_types')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('ad_statuse_id')->references('ad_statuse_id')->on('ad_statuses')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('rental_time_id')->references('rental_time_id')->on('rental_times')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('main_categorie_id')->references('main_categorie_id')->on('main_categories')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('continent_id')->references('continent_id')->on('continent_of_origins')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('cof_id')->references('cof_id')->on('country_of_manufactures')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('governorate_id')->references('governorate_id')->on('governorates')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('area_id')->references('area_id')->on('areas')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('neighborhood_id')->references('neighborhood_id')->on('neighborhoods')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('motion_vector_id')->references('motion_vector_id')->on('motion_vectors')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('ads');
    }
}
