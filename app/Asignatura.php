<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    public function asignaturaalumno(){
        return $this->hasOne('App\AsignaturaAlumno', 'asignatura_id');
    }

    public function recursoshumanos(){
        return $this->belongsTo('App\RecursosHumanos', 'recursos_humanos_id');
    }
}
