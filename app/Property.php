<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Property extends Model
{
    protected $guarded=[];
    protected $dates=['deleted_at'];
    protected $fillable = [
        'category_id','property_title', 'property_description','location','thumbnail', 'floor','beds','baths','purpose','land_area','city','state','contact_no'
      ];
    

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
