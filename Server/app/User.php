<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    protected $fillable = ['name',  'email', 'password', 'status', 'type', 'created_at', 'updated_at'];

    protected $hidden = ['password','deleted_at','remember_token', 'api_token', 'email_verified_at','id'];

    protected $with = ['subscribed_content'];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function subscribed_content()
    {

        return $this->hasMany('App\UserSubscribed', 'user_id');
    }

}
