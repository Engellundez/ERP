@extends('layouts.base')

@section('title')
Calificaciones
@endsection

@section('content')
<h1 class="my-3">Calificaciones</h1>

@if(session('mensaje'))
<div class="alert alert-danger my-2">{{session('mensaje')}}</div>
@endif

<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Materia</th>
                <th>Alumno</th>
                <th>parcial 1</th>
                <th>parcial 2</th>
                <th>parcial 3</th>
                <th>Calificacion Final</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($calificaciones as $cal)
            <tr>
                <td>{{$cal->asignaturaalumno->asignatura->nombre}}</td>
                <td>{{$cal->asignaturaalumno->alumnos->nombre}} {{$cal->asignaturaalumno->alumnos->primer_apellido}} {{$cal->asignaturaalumno->alumnos->segundo_apellido}}</td>
                <td>{{$cal->parcial1}}</td>
                <td>{{$cal->parcial2}}</td>
                <td>{{$cal->parcial3}}</td>
                <td>{{$cal->calificacion_final}}</td>
                <td><a href="{{route('calificacion_editar', $cal)}}"><button class="btn btn-primary btn-sm">Agregar/Editar Calificacion</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$calificaciones->links()}}

@endsection