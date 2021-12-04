<!-- Modal -->
<form action="{{route('trayectoria-academica.store')}}" method="POST">
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
                        <label for="carr_profesional">Titulo/Carrera</label>
                        <input type="text" class="form-control" id="name" name="carr_profesional" value="" required maxlength="50" >

                    </div>
                    <div class="form-group">
                        <label for="grado_academico">Grado académico</label>
                        <input type="text" class="form-control" id="grado_academico" name="grado_academico" value="" required maxlength="50" >

                    </div>
                    <div class="form-group">
                        <label for="email">País</label>
                        <input type="text" class="form-control" id="pais" name="pais" value="" required maxlength="50" >

                    </div>
                    <div class="form-group">
                        <label for="tipo_estudio">Tipo de estudio</label>
                        <input type="text" class="form-control" id="tipo_estudio" name="tipo_estudio" required maxlength="50" >
                    </div>
                    <div class="form-group">
                        <label for="institución">Institucion</label>
                        <input type="text" class="form-control" id="institución" name="institución" required maxlength="50" >
                    </div>
                    <div class="form-group">
                        <label for="fecha_inicial">Fecha de inicio</label>
                        <input type="date" min="1910-01-01" max="2100-12-31" class="form-control" id="fecha_inicial" name="fecha_inicial" required maxlength="20" >
                    </div>
                    <div class="form-group">
                        <label for="fecha_final">Fecha de finalización</label>
                        <input type="date" min="1910-01-01" max="2100-12-31" class="form-control" id="fecha_final" name="fecha_final" required maxlength="20" >
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
