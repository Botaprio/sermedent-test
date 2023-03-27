@extends('layouts.app2')

@section('content')
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="mb-3 col-3">
                <label for="exampleInputEmail1" class="form-label">Número de Presupuesto: ####</label>

            </div>
            <div class="mb-3 col-3">
                <label for="exampleInputPassword1" class="form-label">Rut Paciente: {{$paciente->id}}</label>
            </div>

            <div class="mb-3 col-6">
                <label for="exampleInputPassword1" class="form-label">Paciente: {{$paciente->nombres}} {{$paciente->apellidoPaterno}} {{$paciente->apellidoMaterno}}</label>
            </div>

        </row>



    </div>

        <div class="row">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                </div>
            </div>
            <div class="col-8">
{{--                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">--}}
{{--                    <h4 id="list-item-1">Item 1</h4>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eius expedita illo impedit </p>--}}
{{--                    <h4 id="list-item-2">Item 2</h4>--}}
{{--                    <p><span><span>Lorem ipsum dolor sit amet,</span></p>--}}
{{--                    <h4 id="list-item-3">Item 3</h4>--}}
{{--                    <p>...</p>--}}
{{--                    <h4 id="list-item-4">Item 4</h4>--}}
{{--                    <p>...</p>--}}
{{--                </div>--}}


                <div class="table"></div>

            </div>
        </div>
@endsection
