<!-- Modal -->
<form action="#" method="POST">
    @csrf
    <div class="modal fade" id="modal-profesional-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Trayectoria profesional</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                    <div class="form-group">
                        <label for="Nombre">Empresa</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" required maxlength="12" >
                        {{$errors->first('name')}}
                    </div>
                    <div class="form-group">
                        <label for="egresado_matricula">Nivel de experiencia</label>
                        <input type="text" class="form-control" id="egresado_matricula" name="egresado_matricula" value="{{ old('egresado_matricula')}}" required maxlength="20" >
                        {{$errors->first('egresado_matricula')}}
                    </div>
                    <div class="form-group">
                        <label for="email">Pais</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email')}}" required maxlength="20" >
                        {{$errors->first('email')}}
                    </div>
                    <div class="form-group">
                        <label for="password">Actividad de la empresa</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Area de puesto</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Fecha de inicio</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Fecha de finalizacion</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Puesto</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Subarea</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="password">Descripcion de responsabilidades</label>
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
