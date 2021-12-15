@extends('adminlte::page')

@section('title', 'qqr2')

@section('content_header')

@stop

@section('content')
    <link rel="stylesheet" href="{{asset('css/letras.css')}}">
    <div align="center">
             <div class="col-xl-6 my-2" >
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead >
                        </thead>
                        <tbody>
                            <h5 align="left">DATOS PERSONALES</h5>
                            @foreach ($egresados as $egresado)
                            <tr class="text-center">
                                <th>NOMBRES</th>
                                <td>{{$egresado->ap_paterno}} {{$egresado->ap_materno}} {{$egresado->nombres}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>GRADO ACADÉMICO</th>
                                <td>{{$egresado->grado_academico}}</td>
                            </tr>
                            <tr class="text-center">
                                <th >CÓDIGO MATRICULA</th>
                                <td>{{$egresado->matricula}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>DNI</th>
                                <td>{{$egresado->dni}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>GÉNERO</th>
                                <td>{{$egresado->genero}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>FECHA DE NACIMIENTO</th>
                                <td>{{$egresado->fecha_nacimiento}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>SEMESTRE DE INGRESO</th>
                                <td>{{$egresado->semestre_ingreso}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>SEMESTRE DE EGRESO</th>
                                <td>{{$egresado->semestre_egreso}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>CELULAR</th>
                                <td>{{$egresado->celular}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>PAÍS DE ORIGEN</th>
                                <td>{{$egresado->pais_origen}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>DEPARTAMENTO DE ORIGEN</th>
                                <td>{{$egresado->departamento_origen}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>PAIS DE RESIDENCIA</th>
                                <td>{{$egresado->pais_residencia}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>CIUDAD DE RESIDENCIA</th>
                                <td>{{$egresado->cuidad_residencia}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>LUGAR DE RESIDENCIA</th>
                                <td>{{$egresado->lugar_residencia}}</td>
                            </tr>
                            <tr class="text-center">
                                <th>LINKEDIN</th>
                                <td>{{$egresado->linkedin}}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    <a href="{{route('egresado.index')}}">Regresar</a>
                    <br>

                    {{--  {{$egresados->links()}}  --}}

                </div>

            </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
