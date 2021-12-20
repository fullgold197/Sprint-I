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
        <div class="container-fluid text-left">
                <body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-12 ">
                <div class="table-responsive " style="margin:10px;align=center">
                    <tbody>
                        {{-- <h5 style="font-family:garamond">PERFIL DEL EGRESADO</h5>
                        <h5 style="font-family:garamond">DATOS PERSONALES</h5> --}}

                    </tbody>
                </div>
            </div>
        </div>
                @foreach ($egresados as $egresado)
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6">
                <form action="{{route('datos-personales.update',$egresado->matricula)}}" method="POST" enctype="multipart/form-data">
                <div class="table-responsive mx-auto d-block" style="margin:10px">
                    <div class="card " >



                            <div class="card-header " {{-- style="background-color:teal" --}} >
                             <h5 style="font-family:garamond;text-align:center;">PERFIL DEL EGRESADO</h5>
{{--                         <h5 style="font-family:garamond;text-align:center">DATOS PERSONALES</h5>
 --}}                          </div>
                        <div class="card-body">
                            <table align="left"  >
                        <tbody >


                        @csrf
                        @method('PUT')
                            <input type="hidden" class="form-control" id="matricula" name="matricula"
                             value="{{$egresado->matricula}}">



                            <tr >
                                <td colspan="2">
                                    <img src="{{asset($egresado->url)}}" alt="{{$egresado->url}}" style="width:80%;max-height:400px" class="img-fluid img-thumbnail mx-auto d-block my-4 card-img-top" >
                                </td>
                            </tr>

{{--                             <tr>
 --}}                                {{-- <td align="center" colspan="2">
                                    <div class="form-group">
                                    <label for="file"> </label>
                                        <input type="file" name="file" id="file" accept="image/*"><br>
                                        @error('file')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                </div>
                                </td> --}}
{{--                             </tr>
 --}}                          {{--   <tr>
                                <td align="center" colspan="2">
                                    <button type="submit" class="btn btn-primary">Cambiar foto</button>
                                </td>
                            </tr> --}}

                            <tr colspan="2" class="bg-gray-light"  >
                                <th style="padding-left:50px;padding-bottom: 5px;">NOMBRES</th>
                                <td >{{$egresado->ap_paterno}} {{$egresado->ap_materno}}
                                     {{$egresado->nombres}}</td>
                            </tr>

                            <tr>
                                <th style="padding-left:50px;padding-bottom: 5px;">DNI</th>
                                <td>{{$egresado->dni}}</td>
                            </tr>
                            <tr class="bg-gray-light" >
                                <th style="padding-left:50px;padding-bottom: 5px;">CELULAR</th>
                                <td>{{$egresado->celular}}</td>
                            </tr>
                            <tr >
                                <th style="padding-left:50px;padding-bottom: 5px;">FECHA DE NACIMIENTO</th>
                                <td>{{$egresado->fecha_nacimiento}}</td>
                            </tr>
                            <tr class="bg-gray-light" >
                                <th style="padding-left:50px;padding-bottom: 5px;">GÉNERO</th>
                                <td>{{$egresado->genero}} </td>
                            </tr>


                            <tr class="text-lg-center">
                                <td  colspan="2" style="padding-left:50px;padding-bottom: 5px;">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary  my-3 "
                                style='width:200px; height:40px;

                                ;border-radius: 10px;
                                ;-moz-border-radius: 10px;
                                ;-webkit-border-radius: 10px;
                                ;margin:10px'
                                data-bs-toggle="modal" data-bs-target="#modal-datos-personales-edit-{{$egresado->matricula}}">
                                Editar
                                </button>
                                </td>
                            </tr>





                            <input type="hidden" class="form-control" id="matricula" name="matricula"
                             value="{{$egresado->matricula}}">



                            @include('users.modalEgresados.datos_personales_edit')
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
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



        <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
        <script> console.log('Hi!'); </script>

</body>
</html>
