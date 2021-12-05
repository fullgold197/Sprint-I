 {{-- Con este condicional abrimos el modal si hay un error de validacion en el backend --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script><!-- jquery "debe ir primero"-->--}}
{{--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 --}}



    <style>
        .error{
        color:red;
        font-style: italic;

        };
    </style>

</head>

<body>

<!-- Modal -->
<form action="{{route('egresado.store')}}" name="crear" id="crear" method="POST">
    @csrf
    <div class="modal fade" id="modal-create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Crear nueva lista de egresados</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" value="{{ old('matricula')}}"  maxlength="12" >
                        {{$errors->first('matricula')}}
                    </div>
                    <div class="form-group">
                        <label for="ap_paterno">Apellido paterno</label>
                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" value="{{ old('ap_paterno')}}"  maxlength="20" >
                        {{$errors->first('ap_paterno')}}
                    </div>
                    <div class="form-group">
                        <label for="ap_materno">Apellido materno</label>
                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" value="{{ old('ap_materno')}}"  maxlength="20" >
                        {{$errors->first('ap_materno')}}
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres')}}"  maxlength="30" >
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

                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
    </div>

</form>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@if(count($errors)>0)
<script type="text/javascript">
$(document).ready(function() {
    if($('#crear').length){
$('#crear').modal('show');

    }
});
</script>
@endif
{{-- $("#crear").validate({



            rules:{

                matricula:{
                    required:true,
                },
            },

            messages:{
                matricula:"El campo es requerido",


            },



      }); --}}





</body>
</html>



