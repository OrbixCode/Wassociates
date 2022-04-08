<?php

namespace App;
use App\Property;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Category extends Model
{
    use softDeletes;
    protected $guarded=[];
    protected $dates=['deleted_at'];

    public function products(){
        return $this->hasMany('App\Property');
    }

}
