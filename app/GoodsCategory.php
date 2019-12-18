<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsCategory extends Model
{
    protected $table = "goods_category";
    protected $fillable = ['name', 'type_gem'];
    protected $guarded = ['created_at'];

}

//GoodsCategory

