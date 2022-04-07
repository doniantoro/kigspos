<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $primaryKey = 'id';
    public $table = "transaction";

    public function sales(){
        return $this->hasMany('App\Sales');
    }

    public function user(){
        return $this->belongsToMany('App\User');
    }

}
