<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialAndArtificialTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_and_artificial_types', function (Blueprint $table) {
            $table->id('CAAT_id');
            $table->string('en_name');
            $table->string('ar_name');
            $table->bigInteger('REMC_id')->references('REMC_id')->on('real_estate_main_categories')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('commercial_and_artificial_types');
    }
}
