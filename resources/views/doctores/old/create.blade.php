@extends('layouts.app2')

@section('content')
    <h2>INGRESAR NUEVO DOCTOR</h2>

    <div class="row ">
        <div class="col-xl-12">

            <form action="{{url('doctores')}}" method="POST">
                @csrf

                <div class="d-flex p-2">
                    <label for="" class="form-label">Rut Doctor
                        <input name="id" class="form-control" type="text" value="{{old('id')}}" {{--required--}}>

                        @error('id')
                        <small style="color: red"> {{$message}}</small>
                        @enderror


                    </label>
                </div>


                <div class="d-flex p-2">
                    <label for="" class="form-label">Nombres
                        <input name="nombres" class="form-control" type="text" value="{{old('nombres')}}" {{--required--}}>

                        @error('nombres')
                        <small style="color: red"> {{$message}}</small>
                        @enderror</label>
                </div>
                <div class="d-flex p-2">
                    <label for="" class="form-label">Apellido Paterno
                        <input name="apellidoPaterno" class="form-control" type="text" value="{{old('apellidoPaterno')}}" {{--required--}}>

                        @error('apellidoPaterno')
                        <small style="color: red"> {{$message}}</small>
                        @enderror</label>
                </div>
                <div class="d-flex p-2">
                    <label for="" class="form-label">Apellido Materno
                        <input name="apellidoMaterno" class="form-control" type="text" value="{{old('apellidoMaterno')}}" {{--required--}}>

                        @error('apellidoMaterno')
                        <small style="color: red"> {{$message}}</small>
                        @enderror</label>
                </div>
                <div class="d-flex p-2">
                    <label for="" class="form-label">Fecha de nacimiento
                        <input name="fechaNacimiento" class="form-control" type="date" value="{{old('fechaNacimiento')}}" {{--required--}}>

                        @error('fechaNacimiento')
                        <small style="color: red"> {{$message}}</small>
                        @enderror</label>
                </div>


                <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <select name="especialidad" id="especialidad" class="form-control" required>
                        <option value="">Seleccione Departamento</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{$departamento->id}}"> {{$departamento->nombreDepartamento}}</option>

                        @endforeach
                    </select>
                </div>
                <button type="submit"  class="btn btn-primary">Guardar</button>



            </form>
        </div>
    </div>


@endsection
