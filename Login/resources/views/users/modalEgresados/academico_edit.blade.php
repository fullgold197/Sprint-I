<!-- Modal -->
<form action="{{route('egresado.update', $egresado->matricula)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="modal-edit-{{$egresado->id_academico}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar usuarios</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="grado_academico">Grado Academico</label>
                <input type="text" class="form-control" id="grado_academico" name="grado_academico" required maxlength="20"
                @if($errors->any()) {{-- Si existe algun error entonces--}}
                value="{{old('grado_academico')}}">   {{-- Ojo aqui se debe cerrar el input con ">" si ingresa a la condicion --}}
                {{$errors->first('grado_academico')}}
                @else
                value="{{$egresado->grado_academico}}"> {{--Si no ingresa a la condicion tambien debe cerrarse el input con ">" --}}
                @endif
            </div>
            <div class="form-group">
                <label for="pais">País</label>
                <input type="text" class="form-control" id="pais" name="pais" required maxlength="20"
                @if($errors->any()) {{-- Si existe algun error entonces--}}
                value="{{old('pais')}}">   {{-- Ojo aqui se debe cerrar el input con ">" si ingresa a la condicion --}}
                {{$errors->first('pais')}}
                @else
                value="{{$egresado->pais}}"> {{--Si no ingresa a la condicion tambien debe cerrarse el input con ">" --}}
                @endif
            </div>
            <div class="form-group">
                <label for="institución">Institución</label>
                <input type="text" class="form-control" id="institución" name="institución" required maxlength="20"
                @if($errors->any()) {{-- Si existe algun error entonces--}}
                value="{{old('institución')}}">   {{-- Ojo aqui se debe cerrar el input con ">" si ingresa a la condicion --}}
                {{$errors->first('institución')}}
                @else
                value="{{$egresado->institución}}"> {{--Si no ingresa a la condicion tambien debe cerrarse el input con ">" --}}
                @endif
            </div>
            <div class="form-group">
                <label for="fecha_inicial">Fecha inicial</label>
                <input type="date" class="form-control" id="fecha_inicial" name="fecha_inicial" required maxlength="20"
                @if($errors->any()) {{-- Si existe algun error entonces--}}
                value="{{old('fecha_inicial')}}">   {{-- Ojo aqui se debe cerrar el input con ">" si ingresa a la condicion --}}
                {{$errors->first('fecha_inicial')}}
                @else
                value="{{$egresado->fecha_inicial}}"> {{--Si no ingresa a la condicion tambien debe cerrarse el input con ">" --}}
                @endif
            </div>
            <div class="form-group">
                <label for="fecha_final">Fecha final</label>
                <input type="date" class="form-control" id="fecha_final" name="fecha_final" required maxlength="20"
                @if($errors->any()) {{-- Si existe algun error entonces--}}
                value="{{old('fecha_final')}}">   {{-- Ojo aqui se debe cerrar el input con ">" si ingresa a la condicion --}}
                {{$errors->first('fecha_final')}}
                @else
                value="{{$egresado->fecha_final}}"> {{--Si no ingresa a la condicion tambien debe cerrarse el input con ">" --}}
                @endif
            </div>

          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-danger " value="Editar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>
</form>
