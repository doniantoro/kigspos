<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsFlowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_flow', function (Blueprint $table){
            $table->tinyIncrements('id');
            $table->tinyInteger('status_id');
            $table->timestamp('date')->useCurrent();
        });
        Schema::table('goods_flow', function (Blueprint $table){
            $table->foreign('status_id')->references('id')->on('goods_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_flow');
    }
}
