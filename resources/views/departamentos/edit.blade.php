@extends('layouts.app2')

@section('content')
    <div class="container col-5">

        <h2>EDITAR DATOS DEL DEPARTAMENTO</h2>


<div class="container">
        <form action="{{url('departamentos/'.$departamento->id)}}"  method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
            <label for="" class="form-label">ID Departamento
                <input name="id"  class="form-control" type="text" value="{{old('id', $departamento->id)}}" required>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror

            </label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Nombre Departamento
                <input name="nombreDepartamento" class="form-control" type="text" value="{{old('nombreDepartamento', $departamento->nombreDepartamento)}}" {{--required--}}>

                @error('nombreDepartamento')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>

</div>
    </div>


@endsection
