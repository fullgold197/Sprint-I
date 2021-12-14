<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MpRqv1YPcdS9Lcyfel2puCF8E47N4ezx99h0z3Q1">
    <title>Egresado</title>
<link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

                <link rel="stylesheet" href="/css/admin_custom.css">
                <link rel="stylesheet" href="{{ asset('css/letras.css') }}"> {{--  negrita texto  --}}
</head>

<body class="sidebar-mini">
  <div class="wrapper">
           <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">

    <ul class="navbar-nav">

        <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#">
        <i class="fas fa-bars"></i>
        <span class="sr-only">Toggle navigation</span>
    </a>
</li>
 </ul>

    <ul class="navbar-nav ml-auto">
 <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
</li>

<li class="nav-item dropdown user-menu">
<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"
                                       >
                                        {{ __('Mi perfil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{  url("/profile/password")}}"
                                       >
                                        {{ __('Cambiar contraseña') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
</li>
</ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="http://127.0.0.1:8000/home"
            class="brand-link ">
    <img src="http://127.0.0.1:8000/vendor/adminlte/dist/img/AdminLTELogo.png"
         alt="AdminLTE"
         class="brand-image img-circle elevation-3"
         style="opacity:.8">


    <span class="brand-text font-weight-light ">
        <b>Egresados UNTELS</b>
    </span>

</a>
<div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column "
                data-widget="treeview" role="menu"
                                >

                <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/home">
        <i class="fas fa-fw fa-home "></i>
        <p>Inicio</p>
    </a>

</li>

<li  class="nav-item">
    <a class="nav-link active "
       href="http://127.0.0.1:8000/home/datos-personales">
        <i class="fas fa-fw fa-graduation-cap "></i>
        <p>Datos personales</p></a>

</li>
<li  class="nav-item">
<a class="nav-link  "
       href="http://127.0.0.1:8000/home/trayectoria-academica">
        <i class="fas fa-fw fa-file "></i>
        <p>Trayectoria académica</p></a>
</li>
<li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/home/trayectoria-profesional">
        <i class="fas fa-fw fa-user-cog "></i>
        <p>Trayectoria profesional</p>
    </a>

</li>
</ul>
        </nav>
    </div>

</aside>

    <div class="content-wrapper ">
    <div class="content">
        <div class="container-fluid">
                <body>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 my-2">
                <div class="table-responsive" align="left">
                    <tbody>
                        <h5>PERFIL DEL EGRESADO</h5>
                        <h5>Datos personales</h5>

                    </tbody>
                </div>

                <div class="table-responsive">
                    @foreach ($egresados as $egresado)
                    <form action="{{route('datos-personales.update',$egresado->matricula)}}" method="POST" enctype="multipart/form-data">
                        <div class="card">
                        <div class="card-body">
                        <table align="center">
                        <tbody>
                        @csrf
                        @method('PUT')
                            <input type="hidden" class="form-control" id="matricula" name="matricula"
                             value="{{$egresado->matricula}}">
                            <tr>
                                <td colspan="2">
                                    <img src="{{asset($egresado->url)}}" alt="{{$egresado->url}}" class="img-fluid img-thumbnail" width="300px">
                                </td>
                            </tr>
                            <tr>
                                {{-- <td align="center" colspan="2">
                                    <div class="form-group">
                                    <label for="file"> </label>
                                        <input type="file" name="file" id="file" accept="image/*"><br>
                                        @error('file')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                </div>
                                </td> --}}
                            </tr>
                          {{--   <tr>
                                <td align="center" colspan="2">
                                    <button type="submit" class="btn btn-primary">Cambiar foto</button>
                                </td>
                            </tr> --}}
                            <tr>
                                <th>NOMBRES</th>
                                <td>{{$egresado->ap_paterno}} {{$egresado->ap_materno}} {{$egresado->nombres}}</td>
                            </tr>

                            <tr >
                                <th>GÉNERO</th>
                                <td>{{$egresado->genero}} </td>
                            </tr>

                            <tr >
                                <th>FECHA DE NACIMIENTO</th>
                                <td>{{$egresado->fecha_nacimiento}}</td>
                            </tr>

                            <tr >
                                <th>TELÉFONO</th>
                                <td>{{$egresado->telefono}}</td>
                            </tr>

                            <tr >
                                <th>PROVINCIA</th>
                                <td>{{$egresado->Provincia}}</td>
                            </tr>

                            <tr>
                                <th>DISTRITO</th>
                                <td>{{$egresado->Distrito}}</td>
                            </tr>
                            <tr >
                                <td align="center" colspan="2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-datos-personales-edit-{{$egresado->matricula}}">
                                Editar
                                </button>
                                </td>
                            </tr>





                            <input type="hidden" class="form-control" id="matricula" name="matricula"
                             value="{{$egresado->matricula}}">


                            </div>
                            @include('users.modalEgresados.datos_personales_edit')
                        @endforeach

                    </tbody>
                </table>
                </form>

            </div>

</div>
</div>
</div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
        </div>
    </div>
</div>
</div>


        <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
        <script> console.log('Hi!'); </script>

</body>
</html>
