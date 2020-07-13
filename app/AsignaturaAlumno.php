<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaAlumno extends Model
{
    public function alumnos(){
        return $this->belongsTo('App\Alumnos', 'alumno_id');
    }
    public function asignatura(){
        return $this->belongsTo('App\Asignatura', 'asignatura_id');
    }
    public function calificaciones(){
        return $this->hasOne('App\Calificacion', 'alumno_asignatura_id');
    }
}
