@extends('layouts.app2')

@section('content')
    <div class="container col-5">

        <h2>EDITAR DATOS DEL DOCTOR</h2>




<div class="container">
        <form action="{{url('doctores/'.$doctore->id)}}"  method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
            <label for="" class="form-label">Rut Paciente
                <input name="id"  class="form-control" type="text" value="{{old('id', $doctore->id)}}" {{--required--}}>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror

            </label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Nombres
                <input name="nombres" class="form-control" type="text" value="{{old('nombres', $doctore->nombres)}}" {{--required--}}>

                @error('nombres')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Apellido Paterno
                <input name="apellidoPaterno" class="form-control" type="text" value="{{old('apellidoPaterno', $doctore->apellidoPaterno)}}" {{--required--}}>

                @error('apellidoPaterno')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Apellido Materno
                <input name="apellidoMaterno" class="form-control" type="text" value="{{old('apellidoMaterno', $doctore->apellidoMaterno)}}" {{--required--}}>

                @error('apellidoMaterno')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Fecha de nacimiento
                <input name="fechaNacimiento" class="form-control" type="date" value="{{old('fechaNacimiento', $doctore->fechaNacimiento)}}" {{--required--}}>

                @error('fechaNacimiento')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>

            <div class="form-group">
                <label for="especialidad">Especialidad</label>
                <select name="especialidad" id="especialidad" class="form-control"  >
                    <option value="">{{old('especialidad',$doctore->especialidad)}}</option>
                        @foreach($departamentos as $departamento)
                        <option value="{{$departamento->nombreDepartamento == $doctore->especialidad ?:
                        $departamento->nombreDepartamento }}">
                            {{$departamento->nombreDepartamento == $doctore->especialidad ?:
                            $departamento->nombreDepartamento}}</option>
                        @endforeach


                </select>
            </div>


            <button type="submit"  class="btn btn-primary">Guardar</button>

        </form>

</div>
    </div>


@endsection
