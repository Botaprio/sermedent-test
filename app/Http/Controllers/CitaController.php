<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Jornada;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function create(Doctor $doctor){

        $jornada= Jornada::where('doctor_id',$doctor->id)->get();
        $days=['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domnigo'];
        $citas=Horario::where('doctor_id',$doctor->id)
            ->where('estado','2')->count();

    return view('citas.create', compact('jornada','days','doctor','citas'));

    }

    public function dia(Doctor $doctor, $fecha){

        $dia= Jornada::where('doctor_id',$doctor->id)
            ->where('fecha',$fecha)->first();

        for ($i=\Carbon\Carbon::parse($dia->inicio);$i<\Carbon\Carbon::parse($dia->fin);$i->addMinutes(15))

        $horario= Horario::firstorcreate([
                'fecha'=>$dia->fecha,
                'inicio'=>$i,
                'estado'=>'2',
                'doctor_id'=>$dia->doctor_id,
            ]);

        $horarios= Horario::where('doctor_id',$doctor->id)
                            ->where('fecha',$fecha)
                            ->get();



//        return view('citas.dia', compact('doctor','fecha','dia'));
        return view('citas.dia', compact('horarios','horario'));

    }
}
