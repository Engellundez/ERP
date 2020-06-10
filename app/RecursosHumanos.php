<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosHumanos extends Model
{
    public function departamento(){
        return $this->belongsTo('App\Departamento', 'departamento_id');
    }
    public function entidad(){
        return $this->belongsTo('App\Entidad', 'entidad_id');
    }
    public function puesto(){
        return $this->belongsTo('App\Puesto', 'puesto_id');
    }
    public function universidad(){
        return $this->belongsTo('App\Universidad', 'universidad_id');
    }
}
