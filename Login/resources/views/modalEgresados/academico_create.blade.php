<!-- Modal -->
<form action="#" method="POST">
    @csrf
    <div class="modal fade" id="modal-academico-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Trayectoria académica</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                    <div class="form-group">
                        <label for="Nombre">Titulo/Carrera</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" required maxlength="12" >
                        {{$errors->first('name')}}
                    </div>
                    <div class="form-group">
                        <label for="egresado_matricula">Area de estudio</label>
                        <input type="text" class="form-control" id="egresado_matricula" name="egresado_matricula" value="{{ old('egresado_matricula')}}" required maxlength="20" >
                        {{$errors->first('egresado_matricula')}}
                    </div>
                    <div class="form-group">
                        <label for="email">Fecha de inicio</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email')}}" required maxlength="20" >
                        {{$errors->first('email')}}
                    </div>
                    <div class="form-group">
                        <label for="password">Pais</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Institucion</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Fecha de finalizacion</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Tipo de estudio</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-primary" value="Cancelar">

                    </div>
          </div>
        </div>
      </div>
    </div>
</form>
