@extends('layouts.app2')

@section('content')
<div class="container">

    <h2>DATOS DEL DOCTOR</h2>


<ul>
<li>Rut: {{$doctore->id}}</li>
<li>Nombre: {{$doctore->nombres}} {{$doctore->apellidoPaterno}} {{$doctore->apellidoMaterno}}</li>
</ul>
    <button class="btn btn-primary">Agendar Odontología</button>
    <button class="btn btn-success">Agendar Oftalmología</button>
    <button class="btn btn-warning">Agendar Estética</button>
</div>


@endsection
