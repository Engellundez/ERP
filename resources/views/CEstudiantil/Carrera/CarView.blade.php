@extends('layouts.base')

@section('title')
Carreras
@endsection

@section('content')
<h1 class="my-3">Carreras</h1>
@role('super-usuario|admin')
    <a class="my-3" href="{{ route('carrera_create') }}"><button class="btn btn-success">Agregar</button></a>
@endrole

@if(session('mensaje'))
<div class="alert alert-danger my-2">
    {{session('mensaje')}}
</div>
@endif

<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Carrera</th>
                @role('super-usuario|admin')
                    <th colspan="2" scope="col">Acciones</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach($Car as $carrera)
            <tr>
                <th scope="row">{{$carrera->nombre}}</th>
                @role('super-usuario|admin')
                    <th><a href="{{route('carrera_editar', $carrera)}}"><button class="btn btn-primary">Editar</button></a></th>
                    <th><form action="{{route('carrera_eliminar', $carrera)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form></th>
                @endrole
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $Car->links() }}
@endsection
