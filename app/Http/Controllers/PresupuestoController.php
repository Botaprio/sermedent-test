<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Presupuesto;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presupuestos =Presupuesto::paginate(5);
        return view('presupuestos.index', compact('presupuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Paciente $paciente)

    {

        $presupuesto = Presupuesto::create();

        $paciente = Paciente::pluck('id');

        return view('presupuestos.create', compact('presupuesto', 'paciente'));
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
            'id'=>'required',
        ]);

        Presupuesto::create(
            [
                'id'=> $request->input('id'),
            ]
        );

        session()->flash('status','Presupuesto Creado');

        return redirect('presupuestos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presupuesto  $presupuesto
     * @return \Illuminate\Http\Response
     */
    public function show(Presupuesto $presupuesto)
    {
        return view('presupuestos.show', compact('presupuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presupuesto  $presupuesto
     * @return \Illuminate\Http\Response
     */
    public function edit(Presupuesto $presupuesto)
    {
        return view('presupuestos.edit',compact('presupuesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presupuesto  $presupuesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presupuesto $presupuesto)
    {
        $request->validate([
            'id'=>'required',
        ]);

        $presupuesto->id=$request->input('id');

        $presupuesto->save();

        session()->flash('status', 'Cambios Guardados');

        return redirect('presupuestos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presupuesto  $presupuesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presupuesto $presupuesto)
    {
        $presupuesto->delete();

        session()->flash('status','Presupuesto eliminado');

        return redirect('presupuestos');
    }

    public function nuevo ($id)
        {
            $paciente = Paciente::find($id);

            return view('presupuestos.nuevo', compact('paciente'));

        }
}
