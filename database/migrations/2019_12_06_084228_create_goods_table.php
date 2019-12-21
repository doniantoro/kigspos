<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('sku', 10)->unique();
            $table->string('name', 64);
            $table->tinyInteger('category_id')->unsigned();
            $table->tinyInteger('subcategory_id')->unsigned();
            $table->smallInteger('weight')->unsigned();
            $table->tinyInteger('karat')->unsigned();
            $table->bigInteger('price')->unsigned();
            $table->tinyInteger('current_status')->unsigned();
            $table->tinyInteger('supplier_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();;
            $table->timestamp('updated_at')->useCurrent();;
        });
        Schema::table('goods', function (Blueprint $table){
            $table->foreign('category_id')->references('id')->on('goods_category');
            $table->foreign('subcategory_id')->references('id')->on('goods_subcategory');
            $table->foreign('supplier_id')->references('id')->on('supplier');
            $table->foreign('current_status')->references('id')->on('goods_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
