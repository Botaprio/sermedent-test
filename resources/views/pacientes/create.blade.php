@extends('layouts.app2')
@section('seccion','Pacientes')
@section('encabezado','PACIENTES')
@section('link'){{url('pacientes/create')}}@endsection
@section('seccion2','Listado de Pacientes')
@section('link2','Agregar paciente')
@section('content')

    <div class="container">



        <h2><center>INGRESAR NUEVO PACIENTE</center></h2>
        <br>

    <div class="container bg-light text-dark">
        <form action="{{url('pacientes')}}" method="POST">
            @csrf
            <br>
            <div class="row">
                <div class="col-2">
                    <label for="" class="form-label">Rut Paciente
                    </label>
                </div>
                <div class="col-6">
                <input name="id" class="form-control" type="text" value="{{old('id')}}" {{--required--}}>
                </div>
                    @error('id')
                        <small style="color: red"> {{$message}}</small>
                    @enderror
            </div>

            <br>

            <div class="row">
                <div class="col-2">
            <label for="" class="form-label">Nombres
            </label>
                </div>

                <div class="col-6">
            <input name="nombres" class="form-control" type="text" value="{{old('nombres')}}" {{--required--}}>
                </div>
                @error('nombres')
                    <small style="color: red"> {{$message}}</small>
                @enderror
            </div>

            <br>
            <div class="row">
                <div class="col-2"><label for="" class="form-label">Apellido Paterno </label></div>
                <div class="col-4"><input name="apellidoPaterno" class="form-control" type="text" value="{{old('apellidoPaterno')}}" {{--required--}}></div>


                @error('apellidoPaterno')
                    <small style="color: red"> {{$message}}</small>
                @enderror
                <div class="col-2"><label for="" class="form-label">Apellido Materno</label></div>
                <div class="col-4"><input name="apellidoMaterno" class="form-control" type="text" value="{{old('apellidoMaterno')}}" {{--required--}}>
                </div>
                @error('apellidoMaterno')
                    <small style="color: red"> {{$message}}</small>
                @enderror
            </div>
            <br>
            <div class="row">
            <div class="col-2"><label for="" class="form-label">Fecha de nacimiento</label></div>
                <div class="col-3"><input name="fechaNacimiento" class="form-control" type="date" value="{{old('fechaNacimiento')}}" {{--required--}}>
                </div>

                @error('fechaNacimiento')
            <small style="color: red"> {{$message}}</small>
            @enderror
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                    <label for="" class="form-label">Teléfono Fijo
                    </label>
                </div>
                <div class="col-4">
                    <input name="fonoFijo" class="form-control" type="text" value="{{old('fonoFijo')}}" {{--required--}}>
                </div>
                @error('fonoFijo')
                <small style="color: red"> {{$message}}</small>
                @enderror

                <div class="col-2">
                    <label for="" class="form-label">Teléfono Móvil
                    </label>
                </div>
                <div class="col-4">
                    <input name="fonoCelular" class="form-control" type="text" value="{{old('fonoCelular')}}" {{--required--}}>
                </div>
                @error('fonoCelular')
                <small style="color: red"> {{$message}}</small>
                @enderror
            </div>

            <br>
            <div class="row">
                <div class="col-2">
                    <label for="" class="form-label">Correo Electrónico
                    </label>
                </div>
                <div class="col-6">
                    <input name="mail" class="form-control" type="email" value="{{old('mail')}}" {{--required--}}>
                </div>
                @error('mail')
                <small style="color: red"> {{$message}}</small>
                @enderror
            </div>

            <br>
            <div class="row">
                <div class="col-2">
                    <label for="" class="form-label">Rut Adulto Responsable (opcional)
                    </label>
                </div>
                <div class="col-6">
                    <input name="rutAdultoResponsable" class="form-control" type="text" value="{{old('rutAdultoResponsable')}}" {{--required--}}>
                </div>
                @error('rutAdultoResponsable')
                <small style="color: red"> {{$message}}</small>
                @enderror
            </div>
            <br><br>
            <h3><center>  Datos médicos</center></h3>

            <br>

            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Diabetes</label>
                <input class="form-check-input" type="checkbox" role="switch" name="diabetes">
            </div>

            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Sida</label>
                <input class="form-check-input" type="checkbox" role="switch" name="sida">
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Hipertensión</label>
                <input class="form-check-input" type="checkbox" role="switch" name="hipertension">
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Alergia Medicamentosa</label>
                <input class="form-check-input" type="checkbox" role="switch" name="alergiaMedicamentosa">
                <input name="detalleAlergiaMedicamentosa" type="text" class="input-group-sm">
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Otros</label>
                <input class="form-check-input" type="checkbox" role="switch" name="otros">
                <input name="detalleOtros" type="text" class="input-group-sm mx-5">
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Medicamentos</label>
                <input class="form-check-input" type="checkbox" role="switch" name="medicamento">
                <input name="detalleMedicamento" type="text" class="input-group-sm">
            </div>

            <br>
            <label class="" for="flexSwitchCheckDefault">Observaciones</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="" id="observaciones" name="observaciones"></textarea>
            </div>

            <br>



 <button type="submit" class="btn btn-success">Guardar</button>


        </form>
        <br>
    </div>

    </div>


@endsection
