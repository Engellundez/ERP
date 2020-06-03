<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    public function rh(){
        return $this->belongsTo(RecursosHumanos::class);
    }
}
