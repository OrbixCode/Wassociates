<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\softDeletes;
use App\Role;
use App\Profile;
use App\Country;
use App\City;
use App\Order;


class User extends Authenticatable
{
    use Notifiable;
    use softDeletes;

    protected $dates=['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','role_id','provider','provider_id'
    ];


    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function order(){
        return $this->belongsTo('App\Order');
    }
    public function profile(){
        return $this->hasOne('App\Profile');
    } 

    public function country(){
        return $this->belongsTo('App\Country');
    }
    public function city(){
        return $this->belongsTo('App\City');
    }

    public function getCountry(){
        return $this->profile->country->name;
    }
    public function getCity(){
        return $this->profile->city->name;
    }
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
