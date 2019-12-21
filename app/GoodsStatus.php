<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsStatus extends Model
{
    protected $table = 'goods_status';
     public $timestamps = false;
    public function goods(){
        return $this->hasMany('App\Goods');
    }
}
