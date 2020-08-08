<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <!-- fin bootstrap 4 -->
    <title>@yield('title')</title>
    <style type="text/css">
        #grande {
            font-size: 15px;
            text-align: left;
            width: 190px;
            height: 50px;
        }

        .fondo {
            background-image: url("../../../imagenes/portada.jpg");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }

        .navbar-brand {
            color:
        }

    </style>


</head>

<body class="fondo">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mx-3" href="{{route('inicio')}}">Universidad Occidental</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            @guest

            @else
                @can('invitado')
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="btn btn-primary mx-3" href="{{ route('inicio') }}">Inicio</a>
                        </li>
                        <br>
                        <li class="nav-item active">
                            <a class="btn btn-primary mx-3" href="{{ route('rh') }}">Recursos Humanos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn btn-primary mx-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Universidad</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="btn btn-outline-primary" href="{{ route('enti') }}">Entidades</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" href="{{ route('uni') }}">Universidades</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" href="{{ route('depa') }}">Departamentos</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary " href="{{ route('pues') }}">Puestos</a>

                                <!-- <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a> -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn btn-primary mx-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Control Estudiantil</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="btn btn-outline-primary" href="{{ route('carrera') }}">Carrera</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" href="{{route('grupo')}}">Grupos</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" href="{{route('alumnos')}}">Alumnos</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" id="grande" href="{{route('vinculacion')}}">Vinculación de
                                    Alumnos con sus materias</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" href="{{route('asignatura')}}">Materias</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" href="{{route('calificacion')}}">Calificaciones</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn btn-primary mx-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Roles y Usuarios</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="btn btn-outline-primary" href="{{route('users')}}">Usuarios</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" href="{{ route('roles') }}">Roles</a>
                                <div class="dropdown-divider"></div>
                                <a class="btn btn-outline-primary" href="{{route('permisos')}}">Permisos</a>
                            </div>
                        </li>
                    </ul>
                @endcan
            @endguest

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('login') }}">Iniciar Sesión</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Salir
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    <div style="text-align:center;">
        <div class="container my-5">
            @yield('content')
        </div>
    </div>
</body>

</html>
