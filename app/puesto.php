<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puesto extends Model
{
    public function departamentoPuesto(){
        return $this->hasOne('App\departamentoPuesto', 'puesto_id');
    }
}
