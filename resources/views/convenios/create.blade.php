@extends('layouts.app2')

@section('content')
    <div class="container col-9">



        <h2>INGRESAR NUEVO CONVENIO</h2>

<div class="row ">
    <div class="col-xl-12">

        <form action="{{url('convenios')}}" method="POST">
            @csrf

            <div class="d-flex p-2">
            <label for="" class="form-label">ID Convenio
            <input name="id" class="form-control" type="text" value="{{old('id')}}" {{--required--}}>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror


            </label>
            </div>


            <div class="d-flex p-2">
            <label for="" class="form-label">Nombre Convenio
            <input name="nombreConvenio" class="form-control" type="text" value="{{old('nombreConvenio')}}" {{--required--}}>

                @error('nombreConvenio')
            <small style="color: red"> {{$message}}</small>
            @enderror</label>
            </div>
            <div class="d-flex p-2">
            <label for="" class="form-label">Valor Convenio
            <input name="valorConvenio" class="form-control" type="text" value="{{old('valorConvenio')}}" {{--required--}}>

                @error('valorConvenio')
            <small style="color: red"> {{$message}}</small>
            @enderror</label>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>



        </form>
    </div>
</div>

    </div>


@endsection
