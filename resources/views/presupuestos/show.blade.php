@extends('layouts.app2')

@section('content')
<div class="container">

    <h2>DATOS DEL PRESUPUESTO</h2>

<ul>
<li>ID PRESUPUESTO: {{$presupuesto->id}}</li>
</ul>
    <button class="btn btn-primary">Agendar Odontología</button>
    <button class="btn btn-success">Agendar Oftalmología</button>
    <button class="btn btn-warning">Agendar Estética</button>
</div>


@endsection
