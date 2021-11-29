@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')

@stop

@section('content')
    <body>
    <div class="container">
        <h4>Gestion de Usuarios</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('usuario.index')}}" method="GET">

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
                            <a href="{{route('usuario.create')}}" class="btn btn-success">Nuevo</a>
                        </div>
                        <div class="col-auto my-2 " >
           <a href="{{ route('imprimir', $valor)}}"  target="_blank" class="btn btn-primary" >Exportar PDF</a>
            </div>
                    </div>
                </form>

            </div>

            <div class="col-xl-12 my-2">
                <div class="table-responsive ">
                    <table class="table table-striped" >
                        <thead>

                            <tr class="text-center">
                                <th>Item</th>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Nivel de acceso</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($usuarios)<=0)
                                <tr class="text-center">
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                                @foreach ($usuarios as $usuario)
                            <tr class="text-center">
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->name}}</td>
                                {{-- <td class="text-capitalize">{{$usuario->ap_paterno}} {{$usuario->ap_materno}} {{$usuario->nombres}}</td> --}}
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->role_as}}</td>

                               <td><a href="{{route('usuario.edit', $usuario->id)}}" class="btn btn-warning btn-sm">Editar</a>

                               <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$usuario->id}}">
                                Eliminar
                                </button></td>
                            </tr>
                            @include('admin.usuarios.delete')

                            @endforeach
                            @endif

                        </tbody>
                    </table>
                    {{$usuarios->links()}}

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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


