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
                        <label for="matricula">Matricula</label>
                        <input type="text" class="form-control" name="matricula" required maxlength="50" value="{{$egresados->matricula}}">
                    </div>
                    <div class="form-group">
                        <label for="ap_paterno">Apellido paterno</label>
                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" required maxlength="50" value="{{$egresados->ap_paterno}}">
                    </div>
                    <div class="form-group">
                        <label for="ap_materno">Apellido materno</label>
                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" required maxlength="30" value="{{$egresados->ap_materno}}">
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required maxlength="15" value="{{$egresados->nombres}}">
                    </div>
                    <div class="form-group">
                        {{-- <input type="text" class="form-control" id="genero" name="genero" required maxlength="50" value="{{$egresados->genero}}"> --}}
                        <label for="genero">Genero</label>
                        <select name="genero" class="form-control" id="genero" >

                            <option value="Masculino" {{$egresados->genero=="Masculino" ? 'selected' : '' }}>Masculino</option>
                            <option value="Femenino" {{$egresados->genero=="Femenino" ? 'selected' : '' }}>Femenino</option>



                          </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required maxlength="50" value="{{$egresados->fecha_nacimiento}}">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required maxlength="9" value="{{$egresados->telefono}}">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-primary" value="Cancelar">
                        <a href="{{url('/admin/egresado')}}" class="btn btn-danger">Atrás</a>

                    </div>
                </form>
            </div>

        </div>

    </div>

</body>

</html>
@endsection
