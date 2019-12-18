<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class goods_flows extends Model
{
    protected $fillable = ['status_id','sku','date'];
    protected $table = 'goods_flow';
}
