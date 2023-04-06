@extends('layouts.app2')

@section('content')
    <div class="container col-5">

        <h2>EDITAR DATOS DEL PACIENTE</h2>


<div class="container">
        <form action="{{url('pacientes/'.$paciente->id)}}"  method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
            <label for="" class="form-label">Rut Paciente
                <input name="id"  class="form-control" type="text" value="{{old('id', $paciente->id)}}" {{--required--}}>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror

            </label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Nombres
                <input name="nombres" class="form-control" type="text" value="{{old('nombres', $paciente->nombres)}}" {{--required--}}>

                @error('nombres')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Apellido Paterno
                <input name="apellidoPaterno" class="form-control" type="text" value="{{old('apellidoPaterno', $paciente->apellidoPaterno)}}" {{--required--}}>

                @error('apellidoPaterno')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Apellido Materno
                <input name="apellidoMaterno" class="form-control" type="text" value="{{old('apellidoMaterno', $paciente->apellidoMaterno)}}" {{--required--}}>

                @error('apellidoMaterno')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Fecha de nacimiento
                <input name="fechaNacimiento" class="form-control" type="date" value="{{old('fechaNacimiento', $paciente->fechaNacimiento)}}" {{--required--}}>

                @error('fechaNacimiento')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>


            <button type="submit">Guardar</button>

        </form>

</div>
    </div>


@endsection
