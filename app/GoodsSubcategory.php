<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsSubcategory extends Model
{
    protected $table = 'goods_subcategory';
    protected $fillable = 'name';
    public function goods(){
        return $this->hasMany('App\Goods');
    }
}
