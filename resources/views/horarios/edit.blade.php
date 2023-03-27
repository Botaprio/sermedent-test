@extends('layouts.app2')

@section('content')
    <div class="container">

        <h2> <center> EDITAR DATOS DEL PACIENTE </center></h2>


<div class="container bg-light text-dark">
        <form action="{{url('pacientes/'.$paciente->id)}}"  method="POST">
            @method('PATCH')
            @csrf

            <br>
            <div class="row">
                <div class="col-2">
                    <label for="" class="form-label">Rut Paciente
                    </label>
                </div>
                <div class="col-6">
                    <input name="id" class="form-control" type="text" value="{{old('id',$paciente->id)}}" {{--required--}}>
                </div>
                @error('id')
                <small style="color: red"> {{$message}}</small>
                @enderror
            </div>

            <br>


            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Medicamentos</label>
                <input class="form-check-input" type="checkbox" role="switch" name="medicamento" value ="1"{{$paciente->medicamento === "1" ? 'checked':''}}>
                <input name="detalleMedicamento" type="text" class="input-group-sm"value="{{old('detalleMedicamento',$paciente->detalleMedicamento)}}">
            </div>

            <br>
            <label class="" for="flexSwitchCheckDefault">Observaciones</label>
            <div class="form-floating">
                <input type="text" class="form-control" placeholder="" id="observaciones" name="observaciones" value="{{old('observaciones',$paciente->observaciones)}}"></input>
            </div>

            <br>



            <button type="submit"  class="btn btn-primary">Guardar</button>

        </form>

</div>
    </div>


@endsection
