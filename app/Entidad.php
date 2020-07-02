<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    public function universidad(){
        return $this->hasOne('App\Universidad', 'entidad_id');
    }
}
