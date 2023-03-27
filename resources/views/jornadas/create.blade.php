@extends('layouts.app2')
@section('seccion','Jornadas')
@section('seccion2','Agregar Jornada')
@section('encabezado','Agregar Jornada')
@section('link'){{url('jornadas/create')}}@endsection
@section('link2','Listado de Jornadas ')
@section('content')


    <div class="ms-content-wrapper">

        <div class="row">

            <div class="col-xl-12 col-md-12">
                <div class="ms-panel-body">
                    <form action="{{url('jornadas')}}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <input type="text" name="doctor_id" value="{{$doctor_id}}" hidden>
                        <div class="ms-panel-header ms-panel-custome">
                            <div class="col-md-2 mb-3">
                                <label for="validationCustom0005">Fecha</label>
                                <div class="input-group">
                                    <input type="date" name="fecha"  class="form-control" id="validationCustom0005" required>

                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom0005">Hora de Inicio</label>
                                    <div class="input-group">
                                        <input type="time" name="inicio"  class="form-control" id="validationCustom0005" required>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom0005">Hora de Término</label>
                                    <div class="input-group">
                                        <input type="time" name="fin"  class="form-control" id="validationCustom0005" required>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ms-panel-header ms-panel-custome">
                        <a href="{{route('jornadas.index')}}" class="btn btn-warning mt-4 d-inline w-20">Volver</a>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Guardar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


