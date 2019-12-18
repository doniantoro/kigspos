<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('transaction_id')->unsigned();
            $table->bigInteger('goods_id')->unsigned();
        });
        Schema::table('sales', function (Blueprint $table){
            $table->foreign('goods_id')->references('id')->on('goods');
            $table->foreign('transaction_id')->references('id')->on('transaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
