<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    public $timestamps = false;  
    
    public function goods(){
        return $this->hasOne('App\Goods', 'id', 'goods_id');
    }
    public function transaction(){
        return $this->belongsTo('App\Transaction', 'transaction_id', 'id');
    }
}
