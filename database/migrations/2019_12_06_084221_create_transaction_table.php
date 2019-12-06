<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('price_total')->unsigned();
            $table->string('customer_name', 64);
            $table->tinyInteger('user_id');
            $table->timestamp('date')->useCurrent();
        });
        Schema::table('transaction', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
