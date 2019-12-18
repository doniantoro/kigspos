<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'id';

    public function sales(){
        return $this->hasMany('App\Sales');
    }

    public function user(){
        return $this->belongsToMany('App\user', 'user_id');
    }

}
