<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    public function carrera(){
        return $this->belongsTo('App\carreras', 'carrera_id');
    }

    public function alumnos(){
        return $this->hasMany('App\Alumnos', 'grupo_id');
    }
}
