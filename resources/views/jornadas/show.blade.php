@extends('layouts.app2')

@section('content')
<div class="container">

    <h2>DATOS DEL PACIENTE</h2>

<ul>
<li>Rut: {{$paciente->id}}</li>
<li>Nombre: {{$paciente->nombres}} {{$paciente->apellidoPaterno}} {{$paciente->apellidoMaterno}}</li>
</ul>
    <button class="btn btn-primary">Agendar Odontología</button>
    <button class="btn btn-success">Agendar Oftalmología</button>
    <button class="btn btn-warning">Agendar Estética</button>
</div>


@endsection
