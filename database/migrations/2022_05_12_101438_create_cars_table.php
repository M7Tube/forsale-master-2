<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->text('ar_desc')->nullable();
            $table->text('en_desc')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('manger_accept'); //HERE THIS COULMN CONTAINS (3) VALUE 0-> REJECTED 1-> NEED APPROVAL 2-> ACCEPTED
            $table->boolean('isPhone_visable')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('rejected_reason')->nullable();
            $table->json('picture')->nullable();
            $table->integer('is_special');
            $table->bigInteger('watch_count')->default(0);
            $table->integer('manufacturing_year')->nullable();
            $table->bigInteger('kilometrag')->nullable();
            $table->bigInteger('car_type_id')->references('car_type_id')->on('car_types')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('car_status_id')->references('car_status_id')->on('car_statuses')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('ros_id')->references('ros_id')->on('rent_or_sales')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('motion_vector_id')->references('motion_vector_id')->on('motion_vectors')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('cof_id')->references('cof_id')->on('country_of_manufactures')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('continent_id')->references('continent_id')->on('continent_of_origins')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('rental_time_id')->references('rental_time_id')->on('rental_times')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('color_id')->references('color_id')->on('colors')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('governorate_id')->references('governorate_id')->on('governorates')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('ad_type_id')->references('ad_type_id')->on('ad_types')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('ad_statuse_id')->references('ad_statuse_id')->on('ad_statuses')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('cars');
    }
}
