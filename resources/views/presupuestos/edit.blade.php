@extends('layouts.app2')

@section('content')
    <div class="container col-5">

        <h2>EDITAR PRESUPUESTO</h2>


<div class="container">
        <form action="{{url('presupuestos/'.$presupuesto->id)}}"  method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
            <label for="" class="form-label">ID Presupuesto
                <input name="id"  class="form-control" type="text" value="{{old('id', $presupuesto->id)}}" {{--required--}}>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror

            </label>
            </div>


            <button type="submit"  class="btn btn-primary">Guardar</button>

        </form>

</div>
    </div>


@endsection
