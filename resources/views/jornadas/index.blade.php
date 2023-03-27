@extends('layouts.app2')
@section('seccion','Jornadas')
@section('encabezado','JORNADAS')
@section('link'){{url('jornadas/create')}}@endsection
@section('seccion2','Listado de Jornadas')
@section('link2','Agregar Jornada')
@section('content')


<div class="container col-10">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Id Doctor</th>
            <th>Nombre Doctor</th>
            <th>Fecha</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
        </tr>
        </thead>
        <tbody>

        @foreach($jornadas as $jornada)
            <tr>

                <td>{{$jornada->doctor_id}}</td>
                <td>{{$jornada->doctor->nombres}} {{$jornada->doctor->apellidoPaterno}} {{$jornada->doctor->apellidoMaterno}}</td>
                <td>{{$jornada->fecha}}</td>
                <td>{{$jornada->inicio}}</td>
                <td>{{$jornada->fin}}</td>

            </tr>
        @endforeach
        </tbody>

    </table>
</div>
</div>




    <br><br><br>


        <datalist id="nameDatalistOptions">
            @foreach($jornadas as $jornada)
            <option value="{{$jornada->id}} - {{$jornada->nombres}} {{$jornada->apellidoPaterno}} {{$jornada->apellidoMaterno}}">
            @endforeach
        </datalist>

@endsection
