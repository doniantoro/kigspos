<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsStatus extends Model
{
    protected $table = 'goods_status';
    protected $fillable = 'status';
    public $timestamps = false;
}
