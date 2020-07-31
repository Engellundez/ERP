@extends('layouts.base')

@section('title')
Asignatura
@endsection

@section('content')
<h1 class="my-3">Asignaturas</h1>
<a href="{{route('asignatura_create')}}"><button class="btn btn-success">Agregar Asignaturas</button></a>

@if(session('mensaje'))
<div class="alert alert-danger my-2">{{session('mensaje')}}</div>
@endif

<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Maestro</th>
                <th>Materia</th>
                <th>Semestre</th>
                <th>Hora de Inicio</th>
                <th>Hora de Fin</th>
                <th>Dias Que se imparte</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asignatura as $asi)
            <tr>
                <td>{{$asi->recursoshumanos->nombre}} {{$asi->recursoshumanos->apellido_paterno}} {{$asi->recursoshumanos->apellido_materno}}</td>
                <td>{{$asi->nombre}}</td>
                <td>{{$asi->semestre}}</td>
                <td>{{$asi->inicio_clase}}</td>
                <td>{{$asi->fin_clase}}</td>
                <td>{{$asi->dias_imparticion}}</td>
                <td><a href="{{route('asignatura_editar', $asi)}}"><button class="btn btn-primary btn-sm">Editar</button></a></td>
                <td><form action="{{route('asignatura_eliminar', $asi)}}" method="post">
                    @method('DELETE')
                    @CSRF
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection