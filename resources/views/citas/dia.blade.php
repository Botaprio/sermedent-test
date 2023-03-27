@extends('layouts.app2')
@section('seccion','Días')
@section('seccion2','Ver Día')
@section('encabezado','Ver Día')
@section('link'){{url('dias')}}@endsection
@section('link2','Listado de Días ')
@section('content')
<table class="table table-bordered table-striped table-hover">
    <thead>

    <tr>
        <td>
         HORAS DISPONIBLES - DOCTOR: {{$horario->doctor->nombres}} {{$horario->doctor->apellidoPaterno}} {{$horario->doctor->apellidoMaterno}} - DÍA: {{$horario->fecha}}
        </td>
    </tr>
    </thead>
<tbody>
@foreach($horarios as $horario)
    <tr>
        <td>
            {{\Carbon\Carbon::parse($horario->inicio)->isoFormat('H:mm')}}
        </td>
        <td>
            <a href="{{url('#')}}">RESERVAR HORA</a>
        </td>
    </tr>
@endforeach
</tbody>
</table>

@endsection
