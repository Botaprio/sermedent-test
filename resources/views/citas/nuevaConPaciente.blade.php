@extends('layouts.app2')
@section('seccion','Citas')
@section('seccion2','Agregar Cita')
@section('encabezado','Agregar Cita')
@section('link')
@section('link2','Listado de Citas ')
@section('content')

    <div class="row align-items-center">
        <div class="col"><h2 class="text-center">
                DOCTOR: {{$doctor->nombres}} {{$doctor->apellidoPaterno}} {{$doctor->apellidoMaterno}}</h2></div>

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

    <div class="col-xl-12 col-md-12">
        <nav class="navbar bg-body-tertiary">
            <div class="row">

                <form class="d-flex justify-content-evenly" action="{{url($doctor->id.'/'.$fecha.'/'.$inicio.'/buscarPaciente')}}" method="POST">
                    @csrf
                    <input class="ml-5"  name="texto" list="nameDatalistOptions" id="nameDataList" placeholder="Rut Paciente">
                    <input type="text" name="doctor_id" value="{{$doctor->id}}" hidden>
                    <input type="text" name="fecha" value="{{$fecha}}" hidden>
                    <input type="text" name="inicio" value="{{$inicio}}" hidden>

                    <button class="btn btn-success ml-5" type="submit">Buscar</button>

                </form>
            </div>
        </nav>
        <div class="ms-panel">
            <div class="ms-panel-body">
                <form class="needs-validation" action="{{url('/citas/'.$doctor->id.'/'.$fecha.'/'.$inicio.'/'.$paciente->id.'/crear')}}" method="POST" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom001">Nombres</label>
                            <div class="input-group">
                                <input type="text"   name="nombres" value="{{old('nombres', isset($paciente->nombres)?$paciente->nombres:'')}}" class="form-control" id="validationCustom001"  required>

                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom002">Apellidos</label>
                            <div class="input-group">
                                <input type="text"   name="apellidoPaterno" value="{{old('apellidoPaterno', isset($paciente->apellidoPaterno)?$paciente->apellidoPaterno:'')}}" class="form-control" id="validationCustom002"  required>

                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom003">Email</label>
                            <div class="input-group">
                                <input type="email"   class="form-control" id="validationCustom003"  name="mail" value="{{old('mail', isset($paciente->mail)?$paciente->mail:'')}}" required>

                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom004">Teléfono</label>
                            <div class="input-group">
                                <input type="text"  class="form-control"  name="fonoFijo" value="{{old('fonoFijo', isset($paciente->fonoFijo)?$paciente->fonoFijo:'')}}" id="validationCustom004" required>

                            </div>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom006">Departamento</label>
                            <div class="input-group">
                                <input type="text" name="nombreDepartamento" value="{{$doctor->departamento->nombreDepartamento}}" class="form-control" id="validationCustom006"  required>

                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom007">Doctor</label>
                            <div class="input-group">
                                <input type="text" name="doctor_nombres" class="form-control" value="{{$doctor->nombres}} {{$doctor->apellidoPaterno}} {{$doctor->apellidoMaterno}}" id="validationCustom007"  required>

                            </div>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-3 mb-3">
                            <label for="validationCustom008">Fecha Cita</label>
                            <div class="input-group">
                                <input type="text" name="fecha" class="form-control" id="validationCustom008" value="{{\Carbon\Carbon::parse($fecha)->format('d-m-Y')}}" required>

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom008">Hora Cita</label>
                            <div class="input-group">
                                <input type="text" name="inicio" class="form-control" id="validationCustom008" value="{{\Carbon\Carbon::parse($inicio)->format('H:i')}}" required>

                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-2">
                            <label>Observaciones</label>
                            <div class="input-group">
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Sexo</label>
                            <ul class="ms-list d-flex">
                                <li class="ms-list-item pl-0">
                                    <label class="ms-checkbox-wrap">
                                        <input type="radio" name="radioExample" value="">
                                        <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span> Masculino </span>
                                </li>
                                <li class="ms-list-item">
                                    <label class="ms-checkbox-wrap">
                                        <input type="radio" name="radioExample" value="" checked="">
                                        <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span> Femenino </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="text" name="doctor_id" value="{{$doctor->id}}" hidden>
                    <input type="text" name="fecha" value="{{$doctor->id}}" hidden>
                    <a href="{{url('/citas'.$doctor->id.'/'.$fecha.'/'.$inicio.'/buscarPaciente')}}" class="btn btn-warning mt-4 d-inline w-20" type="submit">Volver</a>
                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Crear cita</button>
                </form>
            </div>
        </div>
    </div>
@endsection
