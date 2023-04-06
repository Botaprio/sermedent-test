<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Servicio;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::paginate(5);

        return view('departamentos.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' =>['required','integer','unique:departamentos'],
            'nombreDepartamento' =>['required','min:2', 'string'],
        ]);

        Departamento::create([
            'id' => $request->input('id'),
            'nombreDepartamento' => $request->input('nombreDepartamento'),
        ]);

        session()->flash('status','Departamento Creado');

        return redirect('departamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        return view('departamentos.show', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        return view('departamentos.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
//            'id' =>['required','integer','unique:departamentos'],
            'nombreDepartamento' =>['required','min:2', 'string'],

        ]);

        $departamento->id = $request->input('id');
        $departamento->nombreDepartamento = $request->input('nombreDepartamento');


        $departamento->save();

        session()->flash('status','Cambios Guardados');

        return redirect('departamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();

        session()->flash('status','Paciente eliminado');

        return redirect('departamentos');
    }



}
