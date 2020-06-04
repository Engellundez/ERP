<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosHumanos extends Model
{
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
    public function entidad(){
        return $this->belongsTo(Entidad::class);
    }
    public function puesto(){
        return $this->belongsTo(Puesto::class);
    }
    public function universidad(){
        return $this->belongsTo(Universidad::class);
    }
}
