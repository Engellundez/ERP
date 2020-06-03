<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosHumanos extends Model
{
    public function entidad(){
        return $this->belongsTo(Entidad::class);
    }
}
