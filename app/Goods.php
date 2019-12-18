<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';

    function GoodsCategory(){
        return $this->hasOne('App\GoodsCategory', 'id', 'category_id');
    }

    function GoodsSubCategory(){
        return $this->hasOne('App\GoodsSubCategory', 'id', 'subcategory_id');
    }
}
