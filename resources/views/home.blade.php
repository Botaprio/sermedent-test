@extends('layouts.app2')
@section('seccion','')
@section('seccion2','')
@section('encabezado','Inicio')
@section('link'){{url('/')}}@endsection
@section('link2','Inicio')
@section('content')


    <div class="row">
        <!-- Notifications Widgets -->


        <div class="col-xl-8 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Próximas citas</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover thead-primary">
                            <thead>
                            <tr>
                                <th scope="col">Paciente</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Contacto</th>
                                <th scope="col">Estado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="ms-table-f-w">  Bernardo Galaviz </td>
                                <td>Dr. Cristina Groves</td>
                                <td>25 Marzo 2023</td>
                                <td>5:00 PM</td>
                                <td>+569-9654-123</td>
                                <td><label class="ms-switch">
                                        <input type="checkbox" checked="">
                                        <span class="ms-switch-slider ms-switch-success round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">  Jenni </td>
                                <td>Dr. Richard Miles</td>
                                <td>25 Marzo 2023</td>
                                <td>8:00 AM</td>
                                <td>+569-4654-991</td>
                                <td><label class="ms-switch">
                                        <input type="checkbox" checked="">
                                        <span class="ms-switch-slider ms-switch-success round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">  John Doe </td>
                                <td>Dr. Andrew </td>
                                <td>25 Marzo 2023</td>
                                <td>10:00 AM</td>
                                <td>+569-9254-445</td>
                                <td><label class="ms-switch">
                                        <input type="checkbox">
                                        <span class="ms-switch-slider ms-switch-success round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">  Alesdro Guitto </td>
                                <td>Dr. Robert </td>
                                <td>25 Marzo 2023</td>
                                <td>2:00 PM</td>
                                <td>+569-2225-333</td>
                                <td><label class="ms-switch">
                                        <input type="checkbox" checked="">
                                        <span class="ms-switch-slider ms-switch-success round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">  Richard </td>
                                <td>Dr. Adwerd</td>
                                <td>25 Marzo 2023</td>
                                <td>5:00 PM</td>
                                <td>+569-2111-356</td>
                                <td><label class="ms-switch">
                                        <input type="checkbox">
                                        <span class="ms-switch-slider ms-switch-success round"></span>
                                    </label>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-md-12">
            <div class="ms-panel ms-panel-fh ms-widget">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Doctores Hoy</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <ul class="ms-followers ms-list ms-scrollable">
                        <li class="ms-list-item media">
                            <img src="{{asset('assets/img/dashboard/doctor-1.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>Micheal</h4>
                                <span class="fs-12">MBBS, MD</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-success" name="button"><i class="material-icons">check</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{asset('assets/img/dashboard/doctor-2.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>Jennifer</h4>
                                <span class="fs-12">MD</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-info" name="button"><i class="material-icons">person_add</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{asset('assets/img/dashboard/doctor-3.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>Adwerd </h4>
                                <span class="fs-12">BMBS</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-info" name="button"><i class="material-icons">person_add</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{asset('assets/img/dashboard/doctor-4.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>John Doe</h4>
                                <span class="fs-12">MS, MD</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-success" name="button"><i class="material-icons">check</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{asset('assets/img/dashboard/doctor-5.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>Jordan</h4>
                                <span class="fs-12">MBBS</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-info" name="button"><i class="material-icons">person_add</i> </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-xl-8 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Lista de espera</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover  thead-primary">
                            <thead>
                            <tr>
                                <th scope="col">Paciente</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contacto</th>
                                <th scope="col">Doctor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{asset('assets/img/dashboard/patient')}}-3.jpg" alt="people"> Richard </td>
                                <td>Richard288@gmail.com</td>
                                <td>+569-555-0875</td>
                                <td>Alberto Pérez</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{asset('assets/img/dashboard/patient')}}-2.jpg" alt="people"> William </td>
                                <td>William434@gmail.com</td>
                                <td>+569-534-0112</td>
                                <td>Jorge Monardes</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{asset('assets/img/dashboard/patient')}}-4.jpg" alt="people"> John Doe </td>
                                <td>johndeo652@gmail.com</td>
                                <td>+569-182-0132</td>
                                <td>Pedro Cifuentes</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{asset('assets/img/dashboard/patient')}}-5.jpg" alt="people"> Martin </td>
                                <td>Martin876@gmail.com</td>
                                <td>+569-998-2341</td>
                                <td>Mario Casas</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{asset('assets/img/dashboard/patient')}}-1.jpg" alt="people"> Robert </td>
                                <td>Robert082@gmail.com</td>
                                <td>+569-455-1431</td>
                                <td>Wolf Young</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-md-12">
            <div class="ms-panel ms-panel-fh ms-widget">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Presupuestos</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <ul class="ms-followers ms-list ms-scrollable">
                        <li class="ms-list-item media">

                            <div class="media-body mt-1">
                                <h4>Ultrasound-Pedro Cáceres.pdf</h4>
                                <a href="#"><span class="fs-12">Ver Presupuesto</span></a>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" name="button">Descargar </button>
                        </li>
                        <li class="ms-list-item media">

                            <div class="media-body mt-1">
                                <h4>Pedro Cáceres.pdf</h4>
                                <a href="#"><span class="fs-12">Ver Presupuesto</span></a>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" name="button">En Espera</button>
                        </li>
                        <li class="ms-list-item media">

                            <div class="media-body mt-1">
                                <h4>Pedro López.pdf</h4>
                                <a href="#"><span class="fs-12">Ver Presupuesto</span></a>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" name="button">Descargar </button>
                        </li>
                        <li class="ms-list-item media">

                            <div class="media-body mt-1">
                                <h4>Heart-María Cáceres.pdf</h4>
                                <a href="#"><span class="fs-12">Ver Presupuesto</span></a>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" name="button">Descargar</button>
                        </li>
                        <li class="ms-list-item media">

                            <div class="media-body mt-1">
                                <h4>Pedro Cáceres2.pdf</h4>
                                <a href="#"><span class="fs-12">Ver Presupuesto</span></a>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" name="button">En Espera</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
