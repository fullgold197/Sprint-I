@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <h4>Editar egresadoss</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('egresado.update',$egresados->matricula)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="apellidos">Apellido paterno</label>
                        <input type="text" class="form-control" name="ap_paterno" required maxlength="50" value="{{$egresados->ap_paterno}}">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Apellido materno</label>
                        <input type="text" class="form-control" name="ap_materno" required maxlength="30" value="{{$egresados->ap_materno}}">
                    </div>
                    <div class="form-group">
                        <label for="documento">Nombres</label>
                        <input type="text" class="form-control" name="nombres" required maxlength="15" value="{{$egresados->nombres}}">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Genero</label>
                        <input type="text" class="form-control" name="genero" required maxlength="50" value="{{$egresados->genero}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" required maxlength="50" value="{{$egresados->fecha_nacimiento}}">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" required maxlength="9" value="{{$egresados->telefono}}">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-primary" value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>

        </div>

    </div>

</body>
</html>
@endsection
