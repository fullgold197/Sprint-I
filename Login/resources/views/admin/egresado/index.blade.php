@extends('layouts.app')


@section('content')
<body>
    <div class="container">
        <h4>Gestion de Egresados</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('egresado.index')}}" method="GET">

                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('egresado.create')}}" class="btn btn-success">Nuevo</a>
                        </div>
                    </div>
                </form>

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
                               <td> <a href="{{route('egresado.edit', $egresado->matricula)}}" class="btn btn-warning btn-sm">Editar</a>
                               <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$egresado->matricula}}">
                         Eliminar
                        </button></td>
                            </tr>
                            @include('admin.egresado.delete')

                            @endforeach
                            @endif

                        </tbody>
                    </table>
                    {{$egresados->links()}}

                </div>

            </div>
<div class="col-auto my-1 ">
                <a href="{{url('/admin')}}" class="btn btn-danger">Atrás</a>
            </div>
        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
@endsection
