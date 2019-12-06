<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table){
            $table->tinyInteger('id')->primary();
            $table->string('name', 64);
            $table->tinyInteger('user_level_id');
            $table->string('username', 64)->unique();
            $table->string('password', 64);
        });
        Schema::table('user', function (Blueprint $table){
            $table->foreign('user_level_id')->references('id')->on('user_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
