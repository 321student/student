<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function counties(){
        return $this->hasMany('App\County');
    }
    public function cities(){
        return $this->hasManyThrough('App\City', 'App\County');    }
}
