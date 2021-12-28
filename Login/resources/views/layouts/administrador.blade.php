<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="G5EUdTqPBPgDQLSXnnqwv21XRQSHIHzpWU4fSIS9">




    <title>
                Admin            </title>




            <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">



        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">




                <link rel="stylesheet" href="/css/admin_custom.css">



</head>

<body class="sidebar-mini" >


        <div class="wrapper">


                    <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">


    <ul class="navbar-nav">

        <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"
                        >
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


    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span >
            Erika
        </span>
    </a>


    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">


                    <li class="user-header bg-primary
                 h-auto ">
                                <p class=" mt-0 ">
                    Erika
                                            <small>Administrador</small>
                                    </p>
            </li>






        <li class="user-footer">
                            <a href="http://127.0.0.1:8000/datospersonales" class="btn btn-default btn-flat">
                    <i class="fa fa-fw fa-user text-lightblue"></i>
                    Profile
                </a>
                        <a class="btn btn-default btn-flat float-right "
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off text-red"></i>
                Log Out
            </a>
            <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="G5EUdTqPBPgDQLSXnnqwv21XRQSHIHzpWU4fSIS9">
            </form>
        </li>

    </ul>

</li>


            </ul>

</nav>


                    <aside class="main-sidebar sidebar-dark-primary elevation-4">


            <a href="http://127.0.0.1:8000/home"
            class="brand-link "
    >


    <img src="http://127.0.0.1:8000/images/untels/untels.png"
         alt="AdminLTE"
         class="brand-image img-circle elevation-3"
         style="opacity:.8">


    <span class="brand-text font-weight-light ">
        <b>UNTELS</b>
    </span>

</a>


    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column "
                data-widget="treeview" role="menu"
                                >

                <li  class="nav-item">

    <a class="{{ (request()->is('admin')) ? 'nav-link active' : 'nav-link' }}"
       href="http://127.0.0.1:8000/admin"        >

        <i class="fas fa-fw fa-home "></i>

        <p>
            Inicio

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="{{ (request()->is('admin/egresado/GraficoVistaEgresados')) ? 'nav-link active' : 'nav-link' }}"
       href="http://127.0.0.1:8000/admin/egresado/GraficoVistaEgresados"        >

        <i class="fas fa-table "></i>

        <p>
            Datos estadísticos

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="{{ (request()->is('admin/egresado')) ? 'nav-link active' : 'nav-link' }}"
       href="http://127.0.0.1:8000/admin/egresado"        >

        <i class="fas fa-fw fa-graduation-cap "></i>

        <p>
            Egresados

                    </p>

    </a>

</li>

<li  class="nav-item has-treeview ">


    <a class="nav-link  "
       href="" >

        <i class="fas fa-fw fa-users-cog "></i>

        <p>
            Usuarios
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>


    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="{{ (request()->is('admin/usuario')) ? 'nav-link active' : 'nav-link' }}"
       href="http://127.0.0.1:8000/admin/usuario"        >

        <i class="far fa-user "></i>

        <p>
            Egresados

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="{{ (request()->is('admin/administradores')) ? 'nav-link active' : 'nav-link' }}"
       href="http://127.0.0.1:8000/admin/administradores"        >

        <i class="fas fa-user-cog "></i>

        <p>
            Administradores

                    </p>

    </a>

</li>

    </ul>

</li>

            </ul>
        </nav>
    </div>

</aside>


                    <div class="content-wrapper ">


            <div class="content-header">
            <div class="container-fluid">
                    @yield('content')
            </div>
        </div>


    <div class="content">
        <div class="container-fluid">

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
