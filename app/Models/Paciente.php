<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function servicio ()
    {
        return $this->hasMany(Servicio::class);
    }

    public function convenio ()
    {
        return $this->hasOne(Convenio::class);
    }

}
