@extends('layouts.app2')

@section('content')
<div class="container">

    <h2>DATOS DEL CONVENIO</h2>

<ul>
    <li>
        Rut: {{$convenio->id}}
    </li>
    <li>
        Nombre: {{$convenio->nombreConvenio}}
    </li>
    <li>
        Valor: {{$convenio->valorConvenio}}
    </li>
</ul>
    <button class="btn btn-primary">Agendar Odontología</button>
    <button class="btn btn-success">Agendar Oftalmología</button>
    <button class="btn btn-warning">Agendar Estética</button>
</div>


@endsection
