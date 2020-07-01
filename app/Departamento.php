<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function universidadDepartamento(){
        return $this->hasOne('App\universidadDepartamento', 'departamento_id');
    }
}
