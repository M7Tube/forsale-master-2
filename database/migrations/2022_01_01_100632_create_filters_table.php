<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filters', function (Blueprint $table) {
            $table->id('filter_id');
            $table->string('name');
            $table->string('values');
            $table->bigInteger('filter_type_id')->references('filter_type_id')->on('filter_types')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->bigInteger('main_categorie_id')->references('main_categorie_id')->on('main_categories')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('filters');
    }
}
