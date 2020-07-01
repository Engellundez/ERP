<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosHumanos extends Model
{
    public function universidadDepartamento(){
        return $this->belongsTo('App\universidadDepartamento', 'universidad_departamento_id');
    }

    public function departamentoPuesto(){
        return $this->belongsTo('App\departamentoPuesto', 'departamento_puesto_id');
    }
}
