<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['name','username', 'password'];
    protected $hidden = 'password';
    public $timestamps = false;

    public function transaction(){
        return $this->belongsToMany('App\Transaction');
    }
    public function user_level(){
        return $this->hasMany('App\UserLevel', 'user_level_id');
    }
}
