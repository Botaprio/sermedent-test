@extends('layouts.app2')

@section('content')
    <br><br>
  <h2><center> LISTADO DE CONVENIOS </center></h2>
    <br><br>
    <nav class="navbar bg-body-tertiary">
        <div class="container col-10">

            <a href="{{url('convenios/create')}}"  class="btn btn-outline-success" type="submit">Agregar nuevo Convenio</a>
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
            <th>Id Convenio</th>
            <th>Nombre Convenio</th>
            <th>Valor Convenio</th>
            <th colspan="3"><center>Acciones</center></th>
        </tr>
        </thead>
        <tbody>

        @foreach($convenios as $convenio)
            <tr>

                <th>{{$convenio->id}}</th>
                <td>{{$convenio->nombreConvenio}}</td>
                <td>${{$convenio->valorConvenio}}</td>

                <td><a href="{{url('convenios/'.$convenio->id)}}" class="btn btn-primary">Ver Convenio</a></td>
                <td><a href="{{url('convenios/'.$convenio->id.'/edit')}}" class="btn btn-warning">Editar convenio</a></td>
                <td>
                    <form action="{{url('convenios/'.$convenio->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar Convenio</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {!! $convenios->links() !!}
</div>
</div>




    <br><br><br>


        <datalist id="nameDatalistOptions">
            @foreach($convenios as $convenio)
            <option value="{{$convenio->id}} - {{$convenio->nombres}} {{$convenio->apellidoPaterno}} {{$convenio->apellidoMaterno}}">
            @endforeach
        </datalist>

@endsection
