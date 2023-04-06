@extends('layouts.app2')
@section('seccion','Doctores')
@section('encabezado','Listado de Doctores')
@section('link'){{url('doctores/create')}}@endsection
@section('link2','Agregar Doctor')
@section('seccion2','Agregar Doctor')
@section('content')

            @foreach($doctores as $doctor)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="ms-card">
                    <div class="ms-card-body">
                        <div class="media fs-14">
                            <div class="mr-2 align-self-center">

                                <img src="../../assets/img/dashboard/doctor-4.jpg" class="ms-img-round" alt="people">
                            </div>
                            <div class="media-body">
                                <h6>{{$doctor->nombres}} {{$doctor->apellidoPaterno}} {{$doctor->apellidoMaterno}}</h6>
                                <div class="dropdown float-right">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="ms-dropdown-list">
                                            <form action="{{url('citas/'.$doctor->id.'/create')}}" method="POST">
                                                @csrf
                                                <div class="media-body text-center">
                                                    <button type="submit" class="btn btn-outline-success">Agendar Hora</button>
                                                </div>
                                                </a>
                                            </form>
                                            <form action="{{url('jornadas/'.$doctor->id.'/create')}}" method="POST">
                                                @csrf
                                                <div class="media-body text-center">
                                                       <button type="submit" class="btn btn-outline-success">Disponibilidad</button>
                                                </div>
                                            </a>
                                            </form>
                                            <a class="media p-2" href="{{route('doctores.edit', $doctor->id)}}">
                                                <div class="media-body">
                                                    <span>Editar</span>
                                                </div>
                                            </a>
                                            <form action="{{url('doctores/'.$doctor->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <a class="media p-2" href="#">
                                                <div class="media-body">
                                                    <button type="submit" class="btn btn-danger"> Eliminar Doctor</button>
                                                </div>
                                            </a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <p class="fs-12 my-1 text-disabled">{{($doctor->departamento->nombreDepartamento)}}</p>
                                <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span> Sermedent, Concepción</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
@endsection
