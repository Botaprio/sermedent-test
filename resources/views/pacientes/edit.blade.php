@extends('layouts.app2')

@section('content')
    <div class="container">

        <h2> <center> EDITAR DATOS DEL PACIENTE </center></h2>


<div class="container bg-light text-dark">
        <form action="{{url('pacientes/'.$paciente->id)}}"  method="POST">
            @method('PATCH')
            @csrf
{{--            <div class="mb-3">--}}
{{--            <label for="" class="form-label">Rut Paciente--}}
{{--                <input name="id"  class="form-control" type="text" value="{{old('id', $paciente->id)}}" --}}{{--required--}}{{-->--}}

{{--                @error('id')--}}
{{--                <small style="color: red"> {{$message}}</small>--}}
{{--                @enderror--}}

{{--            </label>--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--            <label for="" class="form-label">Nombres--}}
{{--                <input name="nombres" class="form-control" type="text" value="{{old('nombres', $paciente->nombres)}}" --}}{{--required--}}{{-->--}}

{{--                @error('nombres')--}}
{{--                <small style="color: red"> {{$message}}</small>--}}
{{--                @enderror</label>--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--            <label for="" class="form-label">Apellido Paterno--}}
{{--                <input name="apellidoPaterno" class="form-control" type="text" value="{{old('apellidoPaterno', $paciente->apellidoPaterno)}}" --}}{{--required--}}{{-->--}}

{{--                @error('apellidoPaterno')--}}
{{--                <small style="color: red"> {{$message}}</small>--}}
{{--                @enderror</label>--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--            <label for="" class="form-label">Apellido Materno--}}
{{--                <input name="apellidoMaterno" class="form-control" type="text" value="{{old('apellidoMaterno', $paciente->apellidoMaterno)}}" --}}{{--required--}}{{-->--}}

{{--                @error('apellidoMaterno')--}}
{{--                <small style="color: red"> {{$message}}</small>--}}
{{--                @enderror</label>--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--            <label for="" class="form-label">Fecha de nacimiento--}}
{{--                <input name="fechaNacimiento" class="form-control" type="date" value="{{old('fechaNacimiento', $paciente->fechaNacimiento)}}" --}}{{--required--}}{{-->--}}

{{--                @error('fechaNacimiento')--}}
{{--                <small style="color: red"> {{$message}}</small>--}}
{{--                @enderror</label>--}}
{{--            </div>--}}
            <br>
            <div class="row">
                <div class="col-2">
                    <label for="" class="form-label">Rut Paciente
                    </label>
                </div>
                <div class="col-6">
                    <input name="id" class="form-control" type="text" value="{{old('id',$paciente->id)}}" {{--required--}}>
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
                    <input name="nombres" class="form-control" type="text" value="{{old('nombres',$paciente->nombres)}}" {{--required--}}>
                </div>
                @error('nombres')
                <small style="color: red"> {{$message}}</small>
                @enderror
            </div>

            <br>
            <div class="row">
                <div class="col-2"><label for="" class="form-label">Apellido Paterno </label></div>
                <div class="col-4"><input name="apellidoPaterno" class="form-control" type="text" value="{{old('apellidoPaterno',$paciente->apellidoPaterno)}}" {{--required--}}></div>


                @error('apellidoPaterno')
                <small style="color: red"> {{$message}}</small>
                @enderror
                <div class="col-2"><label for="" class="form-label">Apellido Materno</label></div>
                <div class="col-4"><input name="apellidoMaterno" class="form-control" type="text" value="{{old('apellidoMaterno',$paciente->apellidoMaterno)}}" {{--required--}}>
                </div>
                @error('apellidoMaterno')
                <small style="color: red"> {{$message}}</small>
                @enderror
            </div>
            <br>
            <div class="row">
                <div class="col-2"><label for="" class="form-label">Fecha de nacimiento</label></div>
                <div class="col-3"><input name="fechaNacimiento" class="form-control" type="date" value="{{old('fechaNacimiento',$paciente->fechaNacimiento)}}" {{--required--}}>
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
                    <input name="fonoFijo" class="form-control" type="text" value="{{old('fonoFijo',$paciente->fonoFijo)}}" {{--required--}}>
                </div>
                @error('fonoFijo')
                <small style="color: red"> {{$message}}</small>
                @enderror

                <div class="col-2">
                    <label for="" class="form-label">Teléfono Móvil
                    </label>
                </div>
                <div class="col-4">
                    <input name="fonoCelular" class="form-control" type="text" value="{{old('fonoCelular',$paciente->fonoCelular)}}" {{--required--}}>
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
                    <input name="mail" class="form-control" type="email" value="{{old('mail',$paciente->mail)}}" {{--required--}}>
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
                    <input name="rutAdultoResponsable" class="form-control" type="text" value="{{old('rutAdultoResponsable',$paciente->rutAdultoResponsable)}}" {{--required--}}>
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
                <input class="form-check-input" type="checkbox" role="switch" name="diabetes" value="1" {{$paciente->diabetes=== "1" ? 'checked':''}}>
            </div>

            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Sida</label>
                <input class="form-check-input" type="checkbox" role="switch" name="sida" value="1" {{$paciente->sida=== "1" ? 'checked':''}}>
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Hipertensión</label>
                <input class="form-check-input" type="checkbox" role="switch" name="hipertension" value="1" {{$paciente->hipertension=== "1" ? 'checked':''}}>
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Alergia Medicamentosa</label>
                <input class="form-check-input" type="checkbox" role="switch" name="alergiaMedicamentosa" value="1" {{$paciente->alergiaMedicamentosa=== "1" ? 'checked':''}}>
                <input name="detalleAlergiaMedicamentosa" type="text" class="input-group-sm"value="{{old('detalleAlergiaMedicamentosa',$paciente->detalleAlergiaMedicamentosa) }}">
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Otros</label>
                <input class="form-check-input" type="checkbox" role="switch" name="otros" value="1" {{$paciente->otros=== "1" ? 'checked':''}}>
                <input name="detalleOtros" type="text" class="input-group-sm mx-5"value="{{old('detalleOtros',$paciente->detalleOtros)}}">
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Medicamentos</label>
                <input class="form-check-input" type="checkbox" role="switch" name="medicamento" value ="1"{{$paciente->medicamento === "1" ? 'checked':''}}>
                <input name="detalleMedicamento" type="text" class="input-group-sm"value="{{old('detalleMedicamento',$paciente->detalleMedicamento)}}">
            </div>

            <br>
            <label class="" for="flexSwitchCheckDefault">Observaciones</label>
            <div class="form-floating">
                <input type="text" class="form-control" placeholder="" id="observaciones" name="observaciones" value="{{old('observaciones',$paciente->observaciones)}}"></input>
            </div>

            <br>



            <button type="submit"  class="btn btn-primary">Guardar</button>

        </form>

</div>
    </div>


@endsection
