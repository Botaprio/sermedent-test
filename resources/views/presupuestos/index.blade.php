@extends('layouts.app2')

@section('content')
    <br><br>
  <h2><center> LISTADO DE PRESUPUESTOS </center></h2>
    <br><br>


    <nav class="navbar bg-body-tertiary">
        <div class="container col-10">

            <a href="{{url('presupuestos/create')}}"  class="btn btn-outline-success" type="submit">Agregar nuevo Presupuesto</a>
            <form class="d-flex" role="search">
                <input class="form-control" list="presupuestosDatlist" id="nameDataList" placeholder="Buscar...">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <br><br><br>
<div class="container col-10">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>ID Presupuesto</th>
            <th colspan="3"><center>Acciones</center></th>
        </tr>
        </thead>
        <tbody>

        @foreach($presupuestos as $presupuesto)
            <tr>

                <th>{{$presupuesto->id}}</th>

                <td><a href="{{url('presupuestos/'.$presupuesto->id)}}" class="btn btn-primary">Seleccionar Atención</a></td>
                <td><a href="{{url('presupuestos/'.$presupuesto->id.'/edit')}}" class="btn btn-warning">Editar datos</a></td>
                <td>
                    <form action="{{url('presupuestos/'.$presupuesto->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar Presupuesto</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {!! $presupuestos->links() !!}
</div>
</div>




    <br><br><br>


        <datalist id="presupuestosDatlist">
            @foreach($presupuestos as $presupuesto)
            <option value="{{$presupuesto->id}} - {{$presupuesto->id}}">
            @endforeach
        </datalist>

@endsection
