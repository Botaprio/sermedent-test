@extends('layouts.app2')

@section('content')
<div class="container">

    <br>
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">
                        Registrar nueva Cita
                    </h3>
                </div>

                <div class="col text-center">
                    <a href="{{url('/pacientes')}}" class="btn btn-success">
                        Volver
                    </a>
                </div>
            </div>

        </div>
    </div>
    <br><br>
    <div class="card-body">

            <form action="{{url('pacientes')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <select name="" id="" class="form-control" required>
                        <option value="">Seleccione Departamento</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{$departamento->id}}"> {{$departamento->nombreDepartamento}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Médico</label>
                    <select name="" id="" class="form-control">
                        @foreach($departamento->doctor as $doctor)
                        {{$doctor->nombre}}
                        @endforeach


                    </select>
                </div>

                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control col-md-2 border border-dark rounded-pill" id="fechaEvaluacion"
                           name="fechaEvaluacion" required>


                </div>
                <div class="form-group">
                    <label for="">Hora de Atención</label>
                    <select name="" id="" class="form-control"></select>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>

    </div>




</div>
@endsection
