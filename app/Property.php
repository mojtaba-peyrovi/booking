<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded =[];

    public function deals(){
        return $this->hasMany('App\Deal');
    }
}
