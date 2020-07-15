@extends('layouts.base')

@section('title')
Carreras
@endsection

@section('content')
<h1 class="my-3">Carreras</h1>
<a href="{{ route('carrera_create') }}"><button class="btn btn-success">Agregar</button></a>

@if(session('mensaje'))
<div class="alert alert-danger my-2">
    {{session('mensaje')}}
</div>
@endif

<div class="table-responsive my-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Carrera</th>
                <th colspan="2" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Car as $carrera)
            <tr>
                <th scope="row">{{$carrera->nombre}}</th>
                <th><a href="{{route('carrera_editar', $carrera)}}"><button class="btn btn-primary">Editar</button></a></th>
                <th><form action="{{route('carrera_eliminar', $carrera)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $Car->links() }}
@endsection
