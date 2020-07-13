<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    public function asignaturaalumno(){
        return $this->belongsTo('App\AsignaturaAlumno', 'alumno_asignatura_id');
    }
}
