<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            // 1 is a Restaurant user and 0 is a Consumer user
            $table->enum('isRestaurant', [1, 0]);
            $table->string('name'); 
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password'); 
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
