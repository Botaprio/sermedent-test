<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate(10);
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
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
            'id' =>['required','min:7','max:10','integer','unique:pacientes'],
            'nombres' =>['required','min:2', 'string'],
            'apellidoPaterno' =>['required','min:2', 'string'],
            'apellidoMaterno' =>['required','min:2', 'string'],
            'fonoFijo' =>['min:7','max:12', 'integer'],
            'fonoCelular' =>['min:7','max:12', 'integer'],
            'mail' =>['email'],
            'rutAdultoResponsable' =>['min:7','max:10', 'integer']


        ]);

        /*$paciente = new Paciente;
        $paciente->id = $request->input('id');
        $paciente->nombres = $request->input('nombres');
        $paciente->apellidoPaterno = $request->input('apellidoPaterno');
        $paciente->apellidoMaterno = $request->input('apellidoMaterno');
        $paciente->fechaNacimiento = $request->input('fechaNacimiento');*/

        Paciente::create([
        'id' => $request->input('id'),
        'nombres' => $request->input('nombres'),
        'apellidoPaterno' => $request->input('apellidoPaterno'),
        'apellidoMaterno' => $request->input('apellidoMaterno'),
        'fechaNacimiento' => $request->input('fechaNacimiento'),
        'fonoFijo' => $request->input('fonoFijo'),
        'fonoCelular' => $request->input('fonoCelular'),
        'mail' => $request->input('mail'),
        'convenio_id' => $request->input('convenio_id'),
        'rutAdultoResponsable' => $request->input('rutAdultoResponsable'),
        'diabetes' => $request->input('diabetes'),
        'sida' => $request->input('sida'),
        'hipertension' => $request->input('hipertension'),
        'alergiaMedicamentosa' => $request->input('alergiaMedicamentosa'),
        'otros' => $request->input('otros'),
        'medicamento' => $request->input('medicamento'),
        'detalleMedicamento' => $request->input('detalleMedicamento'),
        'observaciones' => $request->input('observaciones'),
        'detalleAlergiaMedicamentosa' => $request->input('detalleAlergiaMedicamentosa'),
        'detalleOtros' => $request->input('detalleOtros'),
        ]);
        //SI ES MENOR DE EDAD, REQUIERE ADULTO RESPONSABLE

        session()->flash('status','Paciente Creado');

        return redirect('pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)


    {
        return view('pacientes.show', compact('paciente'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)

    {

        return view('pacientes.edit',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'id' =>['required','min:0000000000','max:9999999999','integer'  ],
            'nombres' =>['required','min:2', 'string'],
            'apellidoPaterno' =>['required','min:2', 'string'],
            'apellidoMaterno' =>['required','min:2', 'string'],
            'fonoFijo' =>['min:7','max:12', 'integer'],
            'fonoCelular' =>['min:7','max:12', 'integer'],
            'mail' =>['email'],
            'rutAdultoResponsable' =>['min:7','max:10', 'integer']
            //SI ES MENOR DE EDAD, REQUIERE ADULTO RESPONSABLE

        ]);

        $paciente->id = $request->input('id');
        $paciente->nombres = $request->input('nombres');
        $paciente->apellidoPaterno = $request->input('apellidoPaterno');
        $paciente->apellidoMaterno = $request->input('apellidoMaterno');
        $paciente->fechaNacimiento = $request->input('fechaNacimiento');
        $paciente->fonoFijo = $request->input('fonoFijo');
        $paciente->fonoCelular = $request->input('fonoCelular');
        $paciente->mail = $request->input('mail');
        $paciente->rutAdultoResponsable = $request->input('rutAdultoResponsable');
        $paciente->diabetes = $request->has('diabetes');
        $paciente->sida = $request->has('sida');
        $paciente->hipertension = $request->has('hipertension');
        $paciente->alergiaMedicamentosa = $request->has('alergiaMedicamentosa');
        $paciente->detalleAlergiaMedicamentosa = $request->input('detalleAlergiaMedicamentosa');
        $paciente->otros = $request->has('otros');
        $paciente->detalleOtros = $request->input('detalleOtros');
        $paciente->medicamento = $request->has('medicamento');
        $paciente->detalleMedicamento = $request->input('detalleMedicamento');
        $paciente->observaciones = $request->input('observaciones');

        $paciente->save();

        session()->flash('status','Cambios Guardados');

        return redirect('pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        session()->flash('status','Paciente eliminado');

        return redirect('pacientes');
    }
}
