@extends('layouts.app')

@section('content')
  <body>
   <div class="container-fluid">
    <!-- BARRA NAVEGACIÓN -->
    <div class="bg-light">
    <nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Sistema de seguimiento de egresados UNTELS</a>

            </div>

      <div id="MenuNavegacion" class="collapse navbar-collapse">
        </ul>
      </div>
    </nav>
  </div>

    <div class="container-fluid">

        <table class="table" align="center" border="1">
                        <thead>
                            <tr>
                                <th>
                                    <a class="nav-link active" href="#">Eventos</a>
                                </th>
                                <th>
                                    <a class="nav-link" href="#">Noticias</a>
                                </th>
                                <th>
                                    <a class="nav-link" href="#">Ofertas Laborales</a>
                                </th>
                                <th>
                                    <a class="nav-link" href="#">Tabulador de salarios</a>
                                </th>
                            </tr>
                        </thead>






        </table>


   </div>

  <div class="row justify-content-center mt-4">
    <div class="col-10 col-md-6 col-lg-4 text-center">
      <a class="text-decoration-none" target="_blank" href="https://www.campusmvp.es/catalogo/Product-Interfaces-web-responsive-con-HTML5,-Flexbox,-CSS-Grid-y-Bootstrap_212.aspx"> </a>
    </div>
  </div>

  <!--opcion 1 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--opcion 2 -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->

</body>
</html>
@endsection
