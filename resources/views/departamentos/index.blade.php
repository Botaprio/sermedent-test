@extends('layouts.app2')
@section('title','Departamentos')



@section('content')
    <br><br>
  <h2><center> LISTADO DE DEPARTAMENTOS </center></h2>
    <br><br>
    <nav class="navbar bg-body-tertiary">
        <div class="container col-10">

            <a href="{{url('departamentos/create')}}"  class="btn btn-outline-success" type="submit">Agregar nuevo Departamento</a>
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
            <th>ID Departamento</th>
            <th>Nombre Departamento</th>
            <th colspan="3"><center>Acciones</center></th>
        </tr>
        </thead>
        <tbody>

        @foreach($departamentos as $departamento)
            <tr>

                <th>{{$departamento->id}}</th>
                <td>{{$departamento->nombreDepartamento}}</td>
                <td><a href="{{url('departamentos/'.$departamento->id)}}" class="btn btn-primary">Ver Departamento</a></td>
                <td><a href="{{url('departamentos/'.$departamento->id.'/edit')}}" class="btn btn-warning">Editar datos</a></td>
                <td>
                    <form action="{{url('departamentos/'.$departamento->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar Departamento</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {!! $departamentos->links() !!}
</div>
</div>




    <br><br><br>


        <datalist id="nameDatalistOptions">
            @foreach($departamentos as $departamento)
            <option value="{{$departamento->id}} - {{$departamento->nombreDepartamento}}">
            @endforeach
        </datalist>

@endsection
