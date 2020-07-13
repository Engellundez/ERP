<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    public function grupo(){
        return $this->belongsTo('App\Grupos', 'grupo_id');
    }

    public function universidad(){
        return $this->belongsTo('App\Universidad', 'universidad_id');
    }

    public function asignaturaalumno(){
        return $this->hasOne('App\AsignaturaAlumno', 'alumno_id');
    }
}
