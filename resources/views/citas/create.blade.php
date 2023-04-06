@extends('layouts.app2')
@section('seccion','Citas')
@section('seccion2','Agregar Cita')
@section('encabezado','Agregar Cita')
@section('link')
    {{url('citas/create')}}
@endsection
@section('link2','Listado de Citas ')
@section('content')

    <div class="row align-items-center">
        <div class="col"><h2 class="text-center">
                DOCTOR: {{$doctor->nombres}} {{$doctor->apellidoPaterno}} {{$doctor->apellidoMaterno}} </h2></div>

    </div>
    <br>

    @if(session('notification'))
        <div class="container">
            <div class="alert alert-success" role="alert">
                {{session('notification')}}
            </div>
        </div>
    @endif
    @if(session('errors'))
        <div class="container">
            <div class="alert alert-danger" role="alert">
                Errores:
                <ul>
                    @foreach(session('errors') as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th class="text-center">Día</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Hora Inicio</th>
                <th class="text-center">Hora Término</th>
                <th class="text-center">DISPONIBLES</th>
                <th class="text-center">OCUPADAS</th>
            </tr>
            </thead>
            <tbody>

            @foreach($jornada as $j)
                <tr>

                    <td>{{\Carbon\Carbon::translateTimeString(\Carbon\Carbon::parse($j->fecha)->format('D'),'en','es')}}</td>
                    <td>
                        <form action="{{url($doctor->id.'/'.$j->fecha.'/show')}}" method="POST">
                            @csrf
                            <button type="submit"
                                    class="btn btn-outline-secondary">{{\Carbon\Carbon::parse($j->fecha)->format('d-m-Y')}}</button>
                        </form>
                    </td>
                    <td>{{$j->inicio}}</td>
                    <td>{{$j->fin}}</td>
                    <td>{{$citas}}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
