<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifcationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifcations', function (Blueprint $table) {
            $table->id('notifcation_id');
            $table->string('title');
            $table->string('logo');
            $table->string('body');
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
        Schema::dropIfExists('notifcations');
    }
}
