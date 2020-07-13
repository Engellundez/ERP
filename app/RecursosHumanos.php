<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosHumanos extends Model
{
    public function universidadDepartamentoPuesto(){
        return $this->belongsTo('App\universidadDepartamentoPuesto', 'universidad_departamento_puesto_id');
    }
    public function asignatura(){
        return $this->hasMany('App\Asignatura', 'recursos_humanos_id');
    }
}
