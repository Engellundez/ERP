<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carreras extends Model
{
    public function grupo(){
        return $this->hasMany('App\Grupos', 'carrera_id');
    }
}
