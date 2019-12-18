<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class good extends Model
{
  // protected $guarded = ['updated_at'];
    protected $fillable = ['sku','name','category_id','subcategory_id','weight','karat','price','current_status','supplier_id'];
}
