@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <h4>Editar egresados</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('egresado.update',$egresados->matricula)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" required maxlength="12"
                        @if($errors->any()) {{-- Si existe algun error entonces--}}
                        value="{{old('matricula')}}">   {{-- Ojo aqui se debe cerrar el input con ">" si ingresa a la condicion --}}
                        {{$errors->first('matricula')}}
                        @else
                        value="{{$egresados->matricula}}"> {{--Si no ingresa a la condicion tambien debe cerrarse el input con ">" --}}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="ap_paterno">Apellido paterno</label>
                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" required maxlength="20"
                        @if($errors->any())
                        value="{{old('ap_paterno')}}">
                        {{$errors->first('ap_paterno')}}
                        @else
                        value="{{$egresados->ap_paterno}}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="ap_materno">Apellido materno</label>
                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" required maxlength="20"
                        @if($errors->any())
                        value="{{old('ap_materno')}}">
                        {{$errors->first('ap_materno')}}
                        @else
                        value="{{$egresados->ap_materno}}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required maxlength="30"
                        @if($errors->any())
                        value="{{old('nombres')}}">
                        {{$errors->first('nombres')}}
                        @else
                        value="{{$egresados->nombres}}">
                        @endif
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
                        <input type="date" class="form-control" id="fecha_nacimiento" min="1910-01-01" max="2100-12-31" name="fecha_nacimiento" required maxlength="50"
                        @if($errors->any())
                        value="{{old('fecha_nacimiento')}}">
                        {{$errors->first('fecha_nacimiento')}}
                        @else
                        value="{{$egresados->fecha_nacimiento}}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"  maxlength="9"
                        @if($errors->any())
                        value="{{old('telefono')}}">
                        {{$errors->first('telefono')}}
                        @else
                        value="{{$egresados->telefono}}">
                        @endif
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
