<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_category extends Model
{
    protected $fillable = ['name', 'type_gem'];
    protected $guarded = ['created_at'];
}
