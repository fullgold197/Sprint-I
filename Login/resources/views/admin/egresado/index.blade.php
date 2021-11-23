@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <h4>Gestion de Egresados</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('egresado.index')}}" method="POST">
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
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>

                            <tr>
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
                                <tr>
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                                @foreach ($egresados as $egresado)
                            <tr>
                                <td>{{$egresado->matricula}}</td>
                                <td>{{$egresado->ap_paterno}} {{$egresado->ap_materno}} {{$egresado->nombres}}</td>
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
        </div>

    </div>
</body>
</html>
@endsection
