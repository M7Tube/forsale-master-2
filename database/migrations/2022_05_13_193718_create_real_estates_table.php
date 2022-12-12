<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estates', function (Blueprint $table) {
            $table->id('real_estate_id');
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->text('ar_desc')->nullable();
            $table->text('en_desc')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('manger_accept'); //HERE THIS COULMN CONTAINS (3) VALUE 0-> REJECTED 1-> NEED APPROVAL 2-> ACCEPTED
            $table->boolean('isPhone_visable');
            $table->integer('price')->nullable();
            $table->string('rejected_reason')->nullable();
            $table->string('picture')->nullable();
            $table->integer('is_special');
            $table->bigInteger('watch_count')->default(0);
            $table->bigInteger('apartment_size')->nullable(); //for apartment category;
            $table->bigInteger('land_size')->nullable(); //for land category
            $table->bigInteger('building_size')->nullable(); //for building category
            $table->bigInteger('floor')->nullable();
            $table->bigInteger('room_count')->nullable();
            $table->boolean('elevator')->nullable();
            $table->bigInteger('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('ros_id')->references('ros_id')->on('rent_or_sales')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('REMC_id')->references('REMC_id')->on('real_estate_main_categories')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('apartment_status_id')->references('apartment_status_id')->on('apartment_statuses')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('building_statuse_id')->references('building_statuse_id')->on('building_statuses')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('CAAT_id')->references('CAAT_id')->on('commercial_and_artificial_types')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('land_type_id')->references('land_type_id')->on('land_types')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('governorate_id')->references('governorate_id')->on('governorates')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('area_id')->references('area_id')->on('areas')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('neighborhood_id')->references('neighborhood_id')->on('neighborhoods')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('real_estates');
    }
}
