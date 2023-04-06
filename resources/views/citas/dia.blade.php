@extends('layouts.app2')
@section('seccion','Días')
@section('seccion2','Ver Día')
@section('encabezado','Ver Día')
@section('link'){{url('dias')}}@endsection
@section('link2','Listado de Días ')
@section('content')
    <div class="text-center">
       <h6> DOCTOR: {{$horario->doctor->nombres}} {{$horario->doctor->apellidoPaterno}} {{$horario->doctor->apellidoMaterno}}</h6>
       <h6> DÍA: {{$horario->fecha}}</h6>
        <table class="table table-bordered table-striped table-hover table">
    <thead>

    <tr>
        <td>
            HORAS
        </td>
        <td>
            RESERVAR
        </td>
    </tr>
    </thead>
<tbody>
@foreach($horarios as $horario)
    @if($horario->estado=="2")
    <tr>
        <td>
            {{\Carbon\Carbon::parse($horario->inicio)->isoFormat('H:mm')}}
        </td>
        <td>
            <form action="{{url($horario->doctor->id.'/'.$horario->fecha.'/'.$horario->inicio.'/show')}}" method="POST">
                @csrf
                <input type="text" name="doctor_id" value="{{$horario->doctor->id}}" hidden>
                <input type="text" name="fecha" value="{{$horario->fecha}}" hidden>
                <input type="text" name="inicio" value="{{$horario->inicio}}" hidden>
                <button type="submit" class="btn btn-outline-secondary">RESERVAR HORA</button>
            </form>
        </td>
    </tr>
    @endif
@endforeach
</tbody>
</table>
    </div>
@endsection
