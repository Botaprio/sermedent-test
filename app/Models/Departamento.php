<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public function servicio (){
        return $this->hasMany(Servicio::class);
    }

    public function doctor (){
        return $this->hasMany(Doctor::class);
    }


}
