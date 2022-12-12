<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id('app_setting_id');
            $table->string('email');
            $table->string('phone_number');
            $table->string('fax');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->integer('wallet_defualt_balance');
            $table->integer('defualt_manger_accept');
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
        Schema::dropIfExists('app_settings');
    }
}
