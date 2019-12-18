<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    protected $table = 'user_level';
    protected $fillable = 'name';
    public $timestamps = false;

    public function user(){
        return $this->hasMany('App\User');
    }
}
