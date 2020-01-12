<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $hidden = 'password';
    public $timestamps = false;

    public function transaction(){
        return $this->belongsToMany('App\Transaction');
    }
    public function user_level(){
        return $this->hasMany('App\UserLevel', 'user_level_id');
    }
    
}
