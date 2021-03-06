<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsCategory extends Model
{
    // protected $fillable = ['name'];
    protected $guarded = ['created_at'];
    protected $table = 'goods_category';

    public function goods(){
        return $this->hasMany('App\Goods');
    }
}
