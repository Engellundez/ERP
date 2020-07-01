<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{    
    public function universidadDepartamento(){
        return $this->hasOne('App\universidadDepartamento', 'universidad_id');
    }
}
