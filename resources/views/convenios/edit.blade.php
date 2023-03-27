@extends('layouts.app2')

@section('content')
    <div class="container col-5">

        <h2>EDITAR CONVENIO</h2>


<div class="container">
        <form action="{{url('convenios/'.$convenio->id)}}"  method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
            <label for="" class="form-label">ID Convenio
                <input name="id"  class="form-control" type="text" value="{{old('id', $convenio->id)}}" {{--required--}}>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror

            </label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Nombre Convenio
                <input name="nombreConvenio" class="form-control" type="text" value="{{old('nombreConvenio', $convenio->nombreConvenio)}}" {{--required--}}>

                @error('nombres')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Valor Convenio
                <input name="valorConvenio" class="form-control" type="text" value="{{old('valorConvenio', $convenio->valorConvenio)}}" {{--required--}}>

                @error('apellidoPaterno')
                <small style="color: red"> {{$message}}</small>
                @enderror</label>
            </div>



            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>

</div>
    </div>


@endsection
