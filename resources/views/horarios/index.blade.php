@extends('layouts.app2')

@section('content')

    <form action="{{url('/horarios')}}" method="POST">
        @csrf


    <br><br>
        <div class="row align-items-center">
            <div class="col"><h2 class="text-center"> DISPONIBILIDAD HORARIA </h2></div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
   <br>

        @if(session('notification'))
            <div class="container">
                <div class="alert alert-success" role="alert">
                    {{session('notification')}}
                </div>
            </div>
        @endif
        @if(session('errors'))
            <div class="container">
                <div class="alert alert-danger" role="alert">
                    Errores:
                    <ul>
                        @foreach(session('errors') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

    <div class="container col-10">
        <input type="text"  name="doctor_id"  value="137251930" hidden>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th class="text-center">Día</th>
                <th class="text-center">Activo</th>
                <th class="text-center">Turno Mañana</th>
                <th class="text-center">Turno Tarde</th>

            </tr>
            </thead>
            <tbody>

            @foreach($days as $key => $day)
                <tr>

                    <th>{{$days[$key]}}</th>
                    <td  class="text-center">
                        <label for="" class="custom-toggle">
                            <input type="checkbox" name="active[]" value="{{$key}}"
{{--                                   @if($horario->active) checked @endif--}}
                            >
                            <span class="custom-toggle-slider rounded-circle"></span>
                        </label>
                    </td>

                    <td>
                        <div class="row">
                            <div class="col">
                                <select class="form-control" name="morning_start[]">
                                    @for($i=8;$i<=11;$i++)
                                        <option value="{{ ($i<10 ? '0': '') .$i}}:00"
{{--                                        @if($i.':00 AM' == $horario->morning_start) selected @endif--}}
                                        > {{$i}}:00 AM </option>
                                        <option value="{{ ($i<10 ? '0': '') .$i}}:30"
{{--                                                @if($i.':30 AM' == $horario->morning_start) selected @endif--}}
                                        > {{$i}}:30 AM </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-control" name="morning_end[]">
                                    @for($i=8;$i<=11;$i++)
                                        <option value="{{ ($i<10 ? '0': '') .$i}}:00"
{{--                                                @if($i.':00 AM' == $horario->morning_end) selected @endif--}}
                                        > {{$i}}:00 AM </option>
                                        <option value="{{ ($i<10 ? '0': '') .$i}}:30"
{{--                                                @if($i.':30 AM' == $horario->morning_end) selected @endif--}}
                                        > {{$i}}:30 AM </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <select class="form-control" name="afternoon_start[]">
                                    @for($i=2;$i<=11;$i++)
                                        <option value="{{$i+12}}:00"
{{--                                                @if($i.':00 PM' == $horario->afternoon_start) selected @endif--}}
                                        > {{$i}}:00 PM </option>
                                        <option value="{{$i+12}}:30"
{{--                                                @if($i.':30 PM' == $horario->afternoon_start) selected @endif--}}
                                        > {{$i}}:30 PM </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-control" name="afternoon_end[]">
                                    @for($i=2;$i<=11;$i++)
                                        <option value="{{$i+12}}:00"
{{--                                                @if($i.':00 PM' == $horario->afternoon_end) selected @endif--}}
                                        > {{$i}}:00 PM </option>
                                        <option value="{{$i+12}}:30"
{{--                                                @if($i.':30 PM' == $horario->afternoon_end) selected @endif--}}
                                        > {{$i}}:30 PM </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
    </div>

    </form>


@endsection
