<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    public function rh(){
        return $this->hasMany('App\RecursosHumanos', 'universidad_id');
    }
}
