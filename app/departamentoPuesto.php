<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamentoPuesto extends Model
{
    public function departamento(){
        return $this->belongsTo('App\Departamento', 'departamento_id');
    }
    
    public function puesto(){
        return $this->belongsTo('App\puesto', 'puesto_id');
    }
    
    public function recursosHumanos(){
        return $this->hasOne('App\RecursosHumanos', 'departamento_puesto_id');
    }
}
