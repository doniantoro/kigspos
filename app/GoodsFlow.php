<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsFlow extends Model
{
    protected $table = 'goods_flow';
    protected $fillable=['status_id'];

    public function goods(){
        return $this->belongsTo('App\Goods');
    }
}
