<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsStatus extends Model
{
    protected $table = 'goods_status';
    //protected $fillable = 'status';
    public $timestamps = false;
    public function goods(){
        return $this->hasMany('App\Goods');
    }
    public function goods_flow(){
        return $this->belongsTo('App\GoodsFlow');
    }

}
