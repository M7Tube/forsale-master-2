<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('serial_number')->nullable();
            $table->integer('is_personal')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_active')->default(1);
            $table->date('birth_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->bigInteger('account_type_id')->references('account_type_id')->on('account_types')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
