<?php

namespace App\Http\Controllers;

use App\Models\Convenio;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenios = Convenio::paginate(5);

        return view('convenios.index', compact('convenios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('convenios.create');
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
            'id' =>['required','unique:convenios'],
            'nombreConvenio' =>['required', 'string'],
            'valorConvenio' =>['required', 'integer'],
        ]);

        Convenio::create([
            'id' => $request->input('id'),
            'nombreConvenio' => $request->input('nombreConvenio'),
            'valorConvenio' => $request->input('valorConvenio'),
        ]);

        session()->flash('status','Convenio Creado');

        return redirect('convenios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function show(Convenio $convenio)
    {
        return view('convenios.show', compact('convenio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function edit(Convenio $convenio)
    {
        return view('convenios.edit', compact('convenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convenio $convenio)
    {

        $request->validate([
            'id' =>['required', 'integer'],
            'nombreConvenio' =>['required','string'],
            'valorConvenio' =>['required', 'integer'],
        ]);

        $convenio->id = $request->input('id');
        $convenio->nombreConvenio = $request->input('nombreConvenio');
        $convenio->valorConvenio = $request->input('valorConvenio');



        $convenio->save();

        session()->flash('status','Cambios Guardados');

        return redirect('convenios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convenio $convenio)
    {
        $convenio->delete();

        session()->flash('status','Convenio eliminado');

        return redirect('convenios');
    }
}
