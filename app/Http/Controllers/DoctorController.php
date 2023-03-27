<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctores = Doctor::paginate(5);

        return view('doctores.index', compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('doctores.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request);
        $request->validate([
            'id' =>['required','min:7','integer','unique:doctors'],
            'nombres' =>['required','min:2', 'string'],
            'apellidoPaterno' =>['required','min:2', 'string'],
            'apellidoMaterno' =>['required','min:2', 'string'],
            'fechaNacimiento' =>['required','min:2', 'string']
        ]);

        $doctor = Doctor::create([
            'id' => $request->input('id'),
            'nombres' => $request->input('nombres'),
            'sexo' => $request->input('sexo'),
            'apellidoPaterno' => $request->input('apellidoPaterno'),
            'apellidoMaterno' => $request->input('apellidoMaterno'),
            'fechaNacimiento' => $request->input('fechaNacimiento'),
            'departamento_id' => $request->input('departamento_id'),
            'direccion' => $request->input('direccion'),
            'comuna' => $request->input('comuna'),
            'fonoFijo' => $request->input('fonoFijo'),
            'fonoCelular' => $request->input('fonoCelular'),
            'mail' => $request->input('mail'),
        ]);

//        $doctor->departamento()->attach($request->input('departamento_id'));
        $doctores=Doctor::all();

        session()->flash('status','Doctor Creado');

        return view('doctores.index',compact('doctores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctore)
    {

        return view('doctores.show',compact('doctore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctore)
    {

        $departamentos = Departamento::all();
        return view('doctores.edit',compact('doctore','departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctore)
    {
        $request->validate([
            'id' =>['required', 'min:7', 'integer'],
            'nombres' =>['required','min:2', 'string'],
            'apellidoPaterno' =>['required','min:2', 'string'],
            'apellidoMaterno' =>['required','min:2', 'string'],
            'fechaNacimiento' =>['required','min:2', 'string']
        ]);

        $doctore->id = $request->input('id');
        $doctore->nombres = $request->input('nombres');
        $doctore->apellidoPaterno = $request->input('apellidoPaterno');
        $doctore->apellidoMaterno = $request->input('apellidoMaterno');
        $doctore->fechaNacimiento = $request->input('fechaNacimiento');
        $doctore->especialidad = $request->input('especialidad');

        $doctore->save();

        session()->flash('status','Cambios Guardados');

        return redirect('doctores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctore)
    {
        $doctore->delete();

        session()->flash('status','Doctor eliminado');

        return redirect('doctores');
    }
}
