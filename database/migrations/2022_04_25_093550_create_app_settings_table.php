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
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fax')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->integer('wallet_defualt_balance')->nullable();
            $table->integer('defualt_manger_accept')->nullable();
            $table->integer('defualt_golden_ad_price')->nullable();
            $table->integer('defualt_normal_ad_price')->nullable();
            $table->integer('defualt_golden_ad_count')->nullable();
            $table->integer('defualt_normal_ad_count')->nullable();
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
