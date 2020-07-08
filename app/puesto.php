<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puesto extends Model
{
    public function universidadDepartamentoPuesto(){
        return $this->hasOne('App\UniversidadDepartamentoPuesto', 'puesto_id');
    }

    public function departamento(){
        return $this->belongsTo('App\Departamento', 'departamento_id');
    }
}
