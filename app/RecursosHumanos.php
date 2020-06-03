<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosHumanos extends Model
{
    public function departamento(){
        return $this->hasMany(Departamento::class);
    }
    public function entidad(){
        return $this->hasMany(Entidad::class);
    }
    public function puesto(){
        return $this->hasMany(Puesto::class);
    }
    public function universidad(){
        return $this->hasMany(Universidad::class);
    }
}
