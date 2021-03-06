<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';


    public function goodscategory(){
        return $this->belongsTo('App\GoodsCategory', 'category_id', 'id');
    }

    public function goodssubcategory(){
        return $this->belongsTo('App\GoodsSubcategory', 'subcategory_id', 'id');
    }

    public function supplier(){
        return $this->hasOne('App\Supplier', 'id', 'supplier_id');
    }

    public function goodsstatus(){
        return $this->belongsTo('App\GoodsStatus', 'current_status');
    }
    
    public function goodsflow(){
        return $this->hasMany('App\GoodsFlow', 'goods_id');
    }

    public function sales(){
        return $this->hasOne('App\Sales');
    }
}
