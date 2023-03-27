@extends('layouts.app2')

@section('content')
    <div class="container col-9">



        <h2>INGRESAR NUEVO DEPARTAMENTO</h2>

<div class="row ">
    <div class="col-xl-12">

        <form action="{{url('departamentos')}}" method="POST">
            @csrf

            <div class="d-flex p-2">
            <label for="" class="form-label">ID Departamento
            <input name="id" class="form-control" type="text" value="{{old('id')}}" {{--required--}}>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror


            </label>
            </div>


            <div class="d-flex p-2">
            <label for="" class="form-label">Nombre Departamento
            <input name="nombreDepartamento" class="form-control" type="text" value="{{old('nombreDepartamento')}}" {{--required--}}>

                @error('nombreDepartamento')
            <small style="color: red"> {{$message}}</small>
            @enderror</label>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>



        </form>
    </div>
</div>

    </div>


@endsection
