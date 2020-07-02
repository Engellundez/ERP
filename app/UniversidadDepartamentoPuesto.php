<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversidadDepartamentoPuesto extends Model
{
    public function universidad(){
        return $this->belongsTo('App\Universidad', 'universidad_id');
    }

    public function departamento(){
        return $this->belongsTo('App\Departamento', 'departamento_id');
    }
    
    public function puesto(){
        return $this->belongsTo('App\puesto', 'puesto_id');
    }

    public function recursosHumanos(){
        return $this->hasOne('App\RecursosHumanos', 'universidad_departamento_puesto_id');
    }
}
