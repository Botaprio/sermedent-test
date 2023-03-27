@extends('layouts.app2')

@section('content')
    <div class="container col-9">



        <h2>INGRESAR NUEVO PRESUPUESTO</h2>

<div class="row ">
    <div class="col-xl-12">

        <form action="{{url('presupuestos')}}" method="POST">
            @csrf


            <div class="d-flex p-2">
                <label for="" class="form-label">RUT Paciente
                    <input name="paciente" class="form-control" type="text" value="{{$paciente[0]}}" {{--required--}}>

                    @error('id')
                    <small style="color: red"> {{$message}}</small>
                    @enderror


                </label>
            </div>

            <div class="d-flex p-2">
            <label for="" class="form-label">ID Presupuesto
            <input name="id" class="form-control" type="text" value="{{$presupuesto->id}}" {{--required--}}>

                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror


            </label>
            </div>




            <button type="submit" class="btn btn-primary">Guardar</button>



        </form>
    </div>
</div>

    </div>


@endsection
