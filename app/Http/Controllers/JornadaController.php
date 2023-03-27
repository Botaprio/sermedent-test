<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Jornada;
use App\Models\Paciente;
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
//        $pacientes = Paciente::paginate(5);
        return view('jornadas.index', compact('jornadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Doctor $doctor)

    {
        $doctor_id=($doctor->id);
        return view('jornadas.create', compact('doctor_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jornada= Jornada::firstorcreate([
            'fecha'=>$request->input('fecha'),
            'inicio'=>$request->input('inicio'),
            'fin'=>$request->input('fin'),
            'estado'=>'1',
            'doctor_id'=>$request->input('doctor_id'),
        ]);

        $jornadas= Jornada::all();
        session()->flash('status','Jornada Creada');

        return view('jornadas.index',compact('jornadas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function show(Jornada $jornada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function edit(Jornada $jornada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jornada $jornada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jornada $jornada)
    {
        //
    }

    public function presupuesto(){


    }
}
