<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function departamento()

    {

            return $this->belongsTo(Departamento::class);
    }

    public function jornadas(){
        return $this->hasMany(Jornada::class);

    }

    public function horarios(){
        return $this->hasMany(Horario::class);

    }
}
