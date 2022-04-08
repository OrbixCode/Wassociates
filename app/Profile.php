<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\User;
use App\Country;
use App\State;
use App\City;


class Profile extends Model
{
    use softDeletes;
    protected $guarded=[];
    protected $dates=['deleted_at'];

    public function user(){
        return $this->belongsToMany('App\User');
    }
    public function country(){
        return $this->belongsTo('App\Country');
    }
    public function state(){
        return $this->belongsTo('App\State');
    }
    public function city(){
        return $this->belongsTo('App\City');
    }
   
   
}

