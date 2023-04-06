<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Jornada;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PhpParser\Comment\Doc;

class CitaController extends Controller
{
    public function create(Doctor $doctor)
    {

        $jornada = Jornada::where('doctor_id', $doctor->id)->get();
        $days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domnigo'];
        $citas = Horario::where('doctor_id', $doctor->id)
            ->where('estado', '2')->count();


        return view('citas.create', compact('jornada', 'days', 'doctor', 'citas'));

    }

    public function dia(Doctor $doctor, $fecha)
    {

        $dia = Jornada::where('doctor_id', $doctor->id)
            ->where('fecha', $fecha)->first();

        for ($i = \Carbon\Carbon::parse($dia->inicio); $i < \Carbon\Carbon::parse($dia->fin); $i->addMinutes(15))

            if ($dia->estado = '1') {

                $horario = Horario::firstOrNew([
                    'fecha' => $dia->fecha,
                    'inicio' => $i,
                    'estado' => '2',
                    'doctor_id' => $dia->doctor_id,
                ]);

                $horarios = Horario::where('doctor_id', $doctor->id)
                    ->where('fecha', $fecha)
                    ->get();


                return view('citas.dia', compact('horarios', 'horario'));
            }

    }

    public function hora(Request $request)
    {
        $doctor = Doctor::where('id', $request->doctor_id)->first();

        $fecha = $request->input('fecha');
        $inicio = $request->input('inicio');


        return view('citas.nueva', compact('doctor', 'fecha', 'inicio'));


    }

    public function buscarPaciente(Request $request)
    {
        $doctor = Doctor::where('id', $request->doctor_id)->first();
        $fecha = $request->input('fecha');
        $inicio = $request->input('inicio');

        $texto = trim($request->get('texto'));
        $paciente = Paciente::where('nombres', 'LIKE', '%' . $texto . '%')
            ->orWhere('id', $texto)
            ->orWhere('apellidoPaterno', 'LIKE', '%' . $texto . '%')
            ->orWhere('apellidoMaterno', 'LIKE', '%' . $texto . '%')
            ->first();

        return view('citas.nuevaConPaciente', compact( 'paciente','doctor', 'fecha', 'inicio'));
    }

    public function confirmaHora(Request $request, Horario $horario)
    {
        $fechita =Carbon::parse($request->fecha)->toDateString();
        $cita = Horario::where('fecha', $fechita)
            ->where('doctor_id', $request->doctor_id)
            ->where('inicio', $request->inicio)
//            ->first();
            ->update(["estado" => "3"]);

        dd($cita);
    }
}
