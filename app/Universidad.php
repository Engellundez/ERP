<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{    
    public function universidadDepartamento(){
        return $this->hasOne('App\universidadDepartamento', 'universidad_id');
    }
    public function entidad(){
        return $this->belongsTo('App\Entidad', 'entidad_id');
    }
    public function alumnos(){
        return $this->hasOne('App\Alumnos', 'universidad_id');
    }
}
