@extends('layouts.app2')

@section('content')
<div class="container">

    <h2>DATOS DEL DEPARTAMENTO</h2>
<div class="row">
<ul>
<li>ID: {{$departamento->id}}</li>
<li>Nombre Departamento: {{$departamento->nombreDepartamento}} </li>
</ul>
{{--    mostrar servicios de cada departamento--}}
<div class="container col-4"></div>

</div>
    <table class="table table-hover table-bordered table-striped">
        <thead></thead>
        <td>Id Servicio</td>
        <td>Nombre Servicio</td>

        <tbody></tbody>
@foreach($departamento->servicio as $servicio)

    <tr>
        <td>{{$servicio->id}}</td>
        <td>{{$servicio->nombreServicio}}</td>
    </tr>


        @endforeach



    </table>




</div>


@endsection
