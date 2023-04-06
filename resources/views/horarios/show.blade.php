@extends('layouts.app2')

@section('content')
    <br><br>
<div class="container">

    <h2 class="text-center">DISPONIBILIDAD DEL DOCTOR: {{$doctor_id}}</h2>

{{--<ul>--}}
{{--<li>Rut: {{$paciente->id}}</li>--}}
{{--<li>Nombre: {{$paciente->nombres}} {{$paciente->apellidoPaterno}} {{$paciente->apellidoMaterno}}</li>--}}
{{--</ul>--}}
    <a href="{{url('citas/create')}}" class="btn btn-primary">Agendar Hora</a>
</div>
<br><br>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th class="text-center">Día</th>
            <th class="text-center">Hora Inicio</th>
            <th class="text-center">Hora término</th>
            <th class="text-center">Hora término</th>
            <th class="text-center">Hora término</th>
        </tr>
        </thead>
        <tbody>
        @foreach($horario as $h)
            @if($h->active)
                <tr>
                    <td class="text-center"><button class="btn btn-outline-primary">{{$days[$h->id-1]}}  </button></td>
                    @if($h->morning_start !=$h->morning_end)
                    <td class="text-center"><button class="btn btn-success">{{$h->morning_start}}</button></td>
                    <td class="text-center"><button class="btn btn-success">{{$h->morning_end}}</button></td>
                    @else
                        <td class="text-center"><button class="btn btn-outline-danger">---</button></td>
                        <td class="text-center"><button class="btn btn-outline-danger">---</button></td>
                    @endif
                    @if($h->afternoon_start !=$h->afternoon_end)
                    <td class="text-center"><button class="btn btn-success">{{$h->afternoon_start}}</button></td>
                    <td class="text-center"><button class="btn btn-success">{{$h->afternoon_end}}</button></td>
                    @else
                        <td class="text-center"><button class="btn btn-outline-danger">---</button></td>
                        <td class="text-center"><button class="btn btn-outline-danger">---</button></td>

                    @endif
                </tr>
            @endif
        @endforeach
        </tbody>


    </table>

</div>
@endsection
