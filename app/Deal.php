<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    public function property(){
        return $this->belongsTo('App\property');
    }
}
