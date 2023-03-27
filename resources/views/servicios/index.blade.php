@extends('layouts.app2')

@section('content')
    <br><br>
  <h2><center> LISTADO DE SERVICIOS </center></h2>
    <br><br>
    <nav class="navbar bg-body-tertiary">
        <div class="container col-10">

            <a href="{{url('servicios/create')}}"  class="btn btn-outline-success" type="submit">Agregar nuevo Servicio</a>
            <form class="d-flex" role="search">
                <input class="form-control" list="nameDatalistOptions" id="nameDataList" placeholder="Buscar...">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <br><br><br>
<div class="container col-10">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>ID Servicio</th>
            <th>Nombre Servicio</th>
            <th>Departamento Asociado</th>
            <th colspan="3"><center>Acciones</center></th>
        </tr>
        </thead>
        <tbody>

        @foreach($servicios as $servicio)
            <tr>

                <th>{{$servicio->id}}</th>
                <td>{{$servicio->nombreServicio}}</td>
                <td>{{$servicio->departamento_id}}</td>
                <td><a href="{{url('servicios/'.$servicio->id)}}" class="btn btn-primary">Ver Servicio</a></td>
                <td><a href="{{url('servicios/'.$servicio->id.'/edit')}}" class="btn btn-warning">Editar Servicio</a></td>
                <td>
                    <form action="{{url('servicios/'.$servicio->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar Servicio</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {!! $servicios->links() !!}
</div>
</div>




    <br><br><br>


        <datalist id="nameDatalistOptions">
            @foreach($servicios as $servicio)
            <option value="{{$servicio->id}} - {{$servicio->nombres}} {{$servicio->apellidoPaterno}} {{$servicio->apellidoMaterno}}">
            @endforeach
        </datalist>

@endsection
