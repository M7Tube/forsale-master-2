<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id('mobile_id');
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->text('ar_desc')->nullable();
            $table->text('en_desc')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('manger_accept'); //HERE THIS COULMN CONTAINS (3) VALUE 0-> REJECTED 1-> NEED APPROVAL 2-> ACCEPTED
            $table->boolean('isPhone_visable');
            $table->string('duration_of_use')->nullable();
            $table->string('rejected_reason')->nullable();
            $table->bigInteger('ram')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('memory')->nullable();
            $table->boolean('customs_paid')->nullable();
            // $table->bigInteger('extra_work_hour')->nullable();
            // $table->bigInteger('work_hour_rent')->nullable();
            // $table->boolean('driving_license')->nullable();
            $table->string('picture')->nullable();
            $table->integer('is_special');
            $table->bigInteger('watch_count')->default(0);
            $table->bigInteger('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('mobiles');
    }
}
