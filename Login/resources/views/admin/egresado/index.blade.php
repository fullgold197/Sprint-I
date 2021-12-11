@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')

@stop

@section('content')
    <body>
    <div class="container">
        <h4>Gestion de Egresados</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('egresado.index')}}" method="GET">

                    <div class="form-row">
                        <div class="col-sm-4 my-2">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-sm-8 my-2">
                            <input type="submit" class="btn btn-dark"  value="Buscar">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-auto my-2">
{{--                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">Nuevo</button>
 --}}
                <button type="button" class="btn btn-primary" id="open" data-bs-toggle="modal" data-bs-target="#modal-create">
                    <i class="fas fa-user"> Nuevo Egresado</i>
                    </button>
                        </div>

                    </div>
                </form>
            </div>
            </div>
        </div>
                <div class="container">
            <div class="col-xl-12">
                <div class="row">
                    <div class="form-row">
            <div class="col-auto my-1" >
                <a href="{{ route('imprimir', $valor)}}"  target="_blank" class="btn btn-danger" ><i class="fas fa-file-pdf"></i></a>
                </div>
                <div class="col-auto my-1" >
                    <a href="{{ route('egresados.Export-excel')}}"  target="_blank" class="btn btn-success" ><i class="fas fa-file-export"></i></a>
                    </div>
            <div class="col-auto my-1">
          {{--   <form action="{{ url('admin/egresado/ImportExcel')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="file"  name="file" id="" class="form-group" >
                    <input type="submit"  value="Importar" class="btn btn-warning">

                </form> --}}
                <a href="{{ route('egresados.Import-excel')}}" class="btn btn-warning" ><i class="fas fa-upload"></i></a>
                </div>

            </div>
        </div>
    </div>
</div>
            <div class="col-xl-12 my-2">
                <div class="table-responsive ">
                    <table class="table table-striped" >
                        <thead>

                            <tr class="text-center">
                                <th>Codigo matricula</th>
                                <th>Nombres</th>
                                <th>Genero</th>
                                <th>Fecha nacimiento</th>
                                <th>Telefono</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($egresados)<=0)
                                <tr class="text-center">
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                                @foreach ($egresados as $egresado)
                            <tr class="text-center">
                                <td>{{$egresado->matricula}}</td>
                                <td class="text-capitalize">{{$egresado->ap_paterno}} {{$egresado->ap_materno}} {{$egresado->nombres}}</td>
                                <td>{{$egresado->genero}}</td>
                                <td>{{$egresado->fecha_nacimiento}}</td>
                                <td>{{$egresado->telefono}}</td>
                                <td>

                                <!-- Button trigger modal -->

                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit-{{$egresado->matricula}}">
                                <i class="fas fa-edit"></i>
                                </button>




                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$egresado->matricula}}">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal">
                                TA
                                </button>
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal">
                                TP
                                </button>



                                </td>

                            </tr>
                            {{-- Poner aquí los include. No sé porque aqui los leé. --}}
                            @include('admin.egresado.crear')
                            @include('admin.egresado.edit')
                            @include('admin.egresado.delete')
                            @include('admin.egresado.trayectoriacademica')
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                    {{$egresados->links()}}

                </div>

            </div>

        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

</html>
