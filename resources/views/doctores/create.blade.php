@extends('layouts.app2')
@section('seccion','Doctores')
@section('seccion2','Agregar Doctor')
@section('encabezado','Agregar Doctor')
@section('link')
    {{url('doctores/create')}}
@endsection
@section('link2','Agregar Doctor')
@section('content')

    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-xl-12 col-md-12">
                <div class="ms-panel-body">
                    <form action="{{url('doctores')}}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom0001">Rut</label>
                                <div class="input-group">
                                    <input type="text" name="id" class="form-control" id="validationCustom0001"
                                           value="{{old('id')}}" placeholder="Ingresar Rut" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Sexo</label>
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="sexo" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Hombre </span>
                                    </li>
                                    <li class="ms-list-item">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="sexo" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Mujer </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom0001">Nombres</label>
                                <div class="input-group">
                                    <input type="text" name="nombres" class="form-control" id="validationCustom0001"
                                           placeholder="" value="{{old('nombres')}}" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom0002">Apellido Paterno</label>
                                <div class="input-group">
                                    <input type="text" name="apellidoPaterno" class="form-control"
                                           id="validationCustom0002" placeholder="" value="{{old('apellidoPaterno')}}"
                                           required>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom0002">Apellido Materno</label>
                                <div class="input-group">
                                    <input type="text" name="apellidoMaterno" class="form-control"
                                           id="validationCustom0002" placeholder="" value="{{old('apellidoMaterno')}}"
                                           required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom0003">Email</label>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" id="validationCustom0003"
                                           placeholder="" value="{{old('mail')}}" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom0004">Crear Contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="validationCustom0004" placeholder=""
                                           value="{{old('mail')}}" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom0005">Fecha de Nacimiento</label>
                                <div class="input-group">
                                    <input type="date" name="fechaNacimiento" class="form-control"
                                           id="validationCustom0005" placeholder="" value="{{old('fechaNacimiento')}}"
                                           required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom6">Departamento</label>
                                <div class="input-group">
                                    <select class="form-control" id="validationCustom6" name="departamento_id"
                                            value="{{old('departamento_id')}}" required>
                                        <option value="0">Seleccione Especialidad...</option>
                                        @foreach($departamentos as $departamento)
                                            <option
                                                value={{$departamento->id}}>{{$departamento->nombreDepartamento}}</option>

                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom007">Dirección</label>
                                <div class="input-group">
                                    <input type="text" name="" class="form-control" id="validationCustom007"
                                           placeholder="" value="{{old('mail')}}" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom008">Comuna</label>
                                <div class="input-group">
                                    <input type="text" name="comuna" class="form-control" id="validationCustom008"
                                           placeholder="" value="{{old('comuna')}}" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom009">Teléfono Fijo</label>
                                <div class="input-group">
                                    <input type="text" name="fonoFijo" class="form-control" id="validationCustom009"
                                           placeholder="" value="{{old('fonoFijo')}}" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom009">Teléfono Móvil</label>
                                <div class="input-group">
                                    <input type="text" name="fonoCelular" class="form-control" id="validationCustom009"
                                           placeholder="" value="{{old('fonoCelular')}}" required>

                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Certificado de Título Profesional</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile"
                                           name="tituloP">
                                    <label class="custom-file-label" for="validatedCustomFile">Seleccionar
                                        Archivo...</label>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Certificado de Especialidad</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile"
                                           name="tituloE">
                                    <label class="custom-file-label" for="validatedCustomFile">Seleccionar
                                        Archivo...</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                        <a href="{{route('doctores.index')}}" class="btn btn-warning mt-4 d-inline w-20" type="submit">Volver</a>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


