<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsSubcategory extends Model
{
    protected $table = 'goods_subcategory';
    public function goods(){
        return $this->hasMany('App\Goods');
    }
    protected $guarded = ['created_at'];
}
