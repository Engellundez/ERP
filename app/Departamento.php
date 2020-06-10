<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function rh(){
        return $this->hasMany('App\RecursosHumanos', 'departamento_id');
    }
}
