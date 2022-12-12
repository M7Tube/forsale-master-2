<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpcialAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spcial_ads', function (Blueprint $table) {
            $table->id('spcial_ad_id');
            $table->string('en_title');
            $table->string('ar_title');
            $table->text('en_desc');
            $table->text('ar_desc');
            $table->integer('is_golden');
            $table->integer('duration')->default(5);
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('spcial_ads');
    }
}
