<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <div style="text-align:center;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('inicio') }}">INICIO</a>
            <a class="navbar-brand" href="{{ route('rh') }}">Recursos Humanos</a>
            <a class="navbar-brand" href="{{ route('uni') }}">Universidades</a>
            <a class="navbar-brand" href="{{ route('depa') }}">Departamentos</a>
            <a class="navbar-brand" href="{{ route('pues') }}">Puestos</a>
            <a class="navbar-brand" href="{{ route('enti') }}">Entidades</a>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
