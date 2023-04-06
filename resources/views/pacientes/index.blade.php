@extends('layouts.app2')
@section('seccion','Pacientes')
@section('encabezado','Listado de Pacientes')
@section('link'){{url('pacientes/create')}}@endsection
@section('link2','Agregar Paciente')
@section('seccion2','Agregar Paciente')
@section('content')


    <div class="ms-panel-body">
        <div class="table-responsive">
    <table class="table table-striped thead-primary w-100">
        <thead>
        <tr>
{{--            <th onclick="location='{{url('/pacientes/create')}}'">Rut Paciente</th>--}}
            <th>Rut Paciente</th>
            <th>Nombres</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th colspan="3"><center>Acciones</center></th>
        </tr>
        </thead>
        <tbody>

        @foreach($pacientes as $paciente)
            <tr>

                <th>{{$paciente->id}}</th>
                <td>{{$paciente->nombres}}</td>
                <td>{{$paciente->apellidoPaterno}}</td>
                <td>{{$paciente->apellidoMaterno}}</td>
                <td><a href="{{route('pacientes.show',$paciente->id)}}" class="btn btn-primary">Seleccionar Atención</a></td>
                <td><a href="{{url('pacientes/'.$paciente->id.'/edit')}}" class="btn btn-warning">Editar datos</a></td>
                <td>
                    <form action="{{url('pacientes/'.$paciente->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar Paciente</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
        </div>
    {!! $pacientes->links() !!}
</div>
</div>




    <br><br><br>


        <datalist id="nameDatalistOptions">
            @foreach($pacientes as $paciente)
            <option value="{{$paciente->id}} - {{$paciente->nombres}} {{$paciente->apellidoPaterno}} {{$paciente->apellidoMaterno}}">
            @endforeach
        </datalist>

@endsection
