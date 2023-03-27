<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Horario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $days=['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domnigo'];
    public function index()
    {





//        $horarios->map(function($horarios){
//            $horarios->morning_start = (new Carbon($horarios-> morning_start))->format('g:i A');
//            $horarios->morning_end = (new Carbon($horarios-> morning_end))->format('g:i A');
//            $horarios->afternoon_start = (new Carbon($horarios-> afternoon_start))->format('g:i A');
//            $horarios->afternoon_end = (new Carbon($horarios-> afternoon_end))->format('g:i A');

//        });

        $days = $this -> days;

        return view('horarios.index', compact('days'));

    }

    public function index2()
    {


        $horarios = Horario::get();


        $horarios->map(function($horarios){
            $horarios->morning_start = (new Carbon($horarios-> morning_start))->format('g:i A');
            $horarios->morning_end = (new Carbon($horarios-> morning_end))->format('g:i A');
            $horarios->afternoon_start = (new Carbon($horarios-> afternoon_start))->format('g:i A');
            $horarios->afternoon_end = (new Carbon($horarios-> afternoon_end))->format('g:i A');

        });

        $days = $this -> days;

        return view('horarios.index', compact('days','horarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $horarios = Horario::get();


        $horarios->map(function($horarios){
            $horarios->morning_start = (new Carbon($horarios-> morning_start))->format('g:i A');
            $horarios->morning_end = (new Carbon($horarios-> morning_end))->format('g:i A');
            $horarios->afternoon_start = (new Carbon($horarios-> afternoon_start))->format('g:i A');
            $horarios->afternoon_end = (new Carbon($horarios-> afternoon_end))->format('g:i A');

        });

        $days = $this -> days;

        return view('horarios.index', compact('days','horarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $active = $request->input('active') ?: [];
        $morning_start= $request->input( 'morning_start');
        $morning_end= $request->input( 'morning_end');
        $afternoon_start= $request->input( 'afternoon_start');
        $afternoon_end= $request->input( 'afternoon_end');
        $doctor_id= $request->input( 'doctor_id');

        $errors =[];

        for ($i=0;$i<7;++$i){

            if ($morning_start[$i] > $morning_end[$i]){
                $errors [] ='Rango inválido para el día '. $this->days[$i].'.';

            }
            if ($afternoon_start[$i] > $afternoon_end[$i]){
                $errors [] ='Rango inválido para el día '. $this->days[$i].'.';
            }
        Horario::updateOrCreate(
            [   'day' =>$i,
                'doctor_id'=>$doctor_id,
],
            [
        'active'=> in_array($i, $active),
        'morning_start' => $morning_start[$i],
        'morning_end' => $morning_end[$i],
        'afternoon_start' => $afternoon_start[$i],
        'afternoon_end' => $afternoon_end [$i],
            ]
        );

        }
        if (count($errors) >0)

            return back()->with(compact('errors'));

        $notification ='Cambios Guardados';
        return view('doctores', compact ('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)


    {
        $days=['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domnigo'];
        $horario = Horario::all();

       return view('horarios.show', compact('horario','days'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function test(){
        $horario=Horario::all();
        return view('horarios.show', compact('horario'));
    }


    public function horario(Doctor $doctor){
        $days = $this -> days;
        return view('horarios.create', compact('doctor', 'days'));
    }

    public function mostrarHorario(Request $request)
    {
        $days = $this -> days;
        $horario=Horario::where('doctor_id',$request->input('doctor_id'))->get();
        $doctor_id=$request->doctor_id;
        return view('horarios.show', compact('horario','days','doctor_id'));
    }
}
