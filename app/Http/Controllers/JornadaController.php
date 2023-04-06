<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Jornada;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class JornadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jornadas = Jornada::all();
        return view('jornadas.index', compact('jornadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Doctor $doctor)

    {
        $doctor_id = ($doctor->id);
        return view('jornadas.create', compact('doctor_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inicio = $request->input('inicio');
        $fin = $request->input('fin');

        if (Carbon::parse($inicio)->DiffInMinutes($fin) < 15) {
            session()->flash('status', 'Error: El tiempo mínimo entre intervalos es de 15 minutos');
            return view('home');
        } else {
            $jornada = Jornada::updateOrCreate([
                'inicio' => $inicio,
                'fin' => $fin,
                'estado' => '1',
                'doctor_id' => $request->input('doctor_id')
            ],
                [

                    'fecha' => $request->input('fecha')

                ]);
            $dia = Jornada::where('doctor_id', $request->input('doctor_id'))
                ->where('fecha', $request->input('fecha'))->first();

            for ($i = \Carbon\Carbon::parse($dia->inicio); $i < \Carbon\Carbon::parse($dia->fin); $i->addMinutes(15))

//            $horario= Horario::firstorcreate([
                $horario = Horario::create([
                    'fecha' => $dia->fecha,
                    'inicio' => $i,
                    'estado' => '2',
                    'doctor_id' => $dia->doctor_id,
                ]);

            $jornadas = Jornada::all();
            session()->flash('status', 'Jornada Creada');

            return view('jornadas.index', compact('jornadas'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Jornada $jornada
     * @return \Illuminate\Http\Response
     */
    public function show(Jornada $jornada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Jornada $jornada
     * @return \Illuminate\Http\Response
     */
    public function edit(Jornada $jornada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Jornada $jornada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jornada $jornada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Jornada $jornada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jornada $jornada)
    {
        //
    }

    public function presupuesto()
    {


    }
}
