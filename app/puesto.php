<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puesto extends Model
{
    public function rh(){
        return $this->hasMany('App\RecursosHumanos', 'puesto_id');
    }
}
