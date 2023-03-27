@extends('layouts.app2')

@section('content')
    <div class="container col-9">



        <h2>INGRESAR NUEVO SERVICIO</h2>

<div class="row ">
    <div class="col-xl-12">

        <form action="{{url('servicios')}}" method="POST">
            @csrf

            <div class="d-flex p-2">
            <label for="" class="form-label">ID Servicio
            <input name="id" class="form-control" type="text" value="{{old('id')}}" {{--required--}}>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror
            </label>
            </div>

            <div class="d-flex p-2">
            <label for="" class="form-label">Nombre Servicio
            <input name="nombreServicio" class="form-control" type="text" value="{{old('nombreServicio')}}" {{--required--}}>

                @error('nombreServicio')
            <small style="color: red"> {{$message}}</small>
            @enderror</label>
            </div>
            <br>

            <label for="" class="form-label">Departamento asociado </label>
            <br> <br>
            <div class="form-floating">
                <select class="form-select" name="departamento"  id="floatingSelect" aria-label="Seleccionar Departamento form">
                    <option selected>Departamento</option>
                    @foreach($departamentos as $departamento)
                    <option value="{{$departamento->id}}">{{$departamento->nombreDepartamento}}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Seleccionar</label>

            </div>

            <br>

            <button type="submit" class="btn btn-primary">Guardar</button>



        </form>
    </div>
</div>

    </div>


@endsection
