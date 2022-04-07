<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Transaction;

class User extends Authenticatable
{
    public $table = 'user';
    protected $hidden = 'password';
    public $timestamps = false;


    public function user_level(){
        return $this->hasMany('App\UserLevel', 'user_level_id');
    }
    
    public function transaction(){
        return $this->belongsToMany('App\Transactions');
    }
}
