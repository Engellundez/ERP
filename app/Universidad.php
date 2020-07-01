<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    public function recursosHumanos(){
        return $this->hasMany('App\RecursosHumanos', 'universidad_id');
    }
    
    public function universidadDepartamento(){
        return $this->hasOne('App\universidadDepartamento', 'universidad_id');
    }
}
