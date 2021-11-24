
@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <h4>Registrar Egresados</h4>


        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('egresado.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" value="{{ old('matricula')}}" required maxlength="12" ">
                        {{$errors->first('matricula')}}
                    </div>
                    <div class="form-group">
                        <label for="ap_paterno">Apellido paterno</label>
                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" value="{{ old('ap_paterno')}}" required maxlength="20" ">
                        {{$errors->first('ap_paterno')}}
                    </div>
                    <div class="form-group">
                        <label for="ap_materno">Apellido materno</label>
                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" value="{{ old('ap_materno')}}" required maxlength="20" >
                        {{$errors->first('ap_materno')}}
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres')}}" required maxlength="30" >
                        {{$errors->first('nombres')}}
                    </div>
                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <select name="genero" class="form-control"  id="genero" required>
                            <option selected disabled value="">Seleccione genero</option>
                            <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" min="1910-01-01" max="2100-12-31" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento')}}" required  >
                        {{$errors->first('fecha_nacimiento')}}
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono')}}"   maxlength="9">
                        {{$errors->first('telefono')}}
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
