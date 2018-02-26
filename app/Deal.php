<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $guarded =[];

    public function property(){
        return $this->belongsTo('App\Property');
    }
}
