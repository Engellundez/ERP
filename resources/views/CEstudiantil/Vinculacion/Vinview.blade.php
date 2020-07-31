@extends('layouts.base')

@section('title')
Vinculacion
@endsection

@section('content')
<h1 class="my-3">Vinculacion</h1>
<a href="{{route('vinculacion_create')}}"><button class="btn btn-success">Agregar Vinculacion</button></a>

@if(session('mensaje'))
<div class="alert alert-danger my-3">{{session('mensaje')}}</div>
@endif

<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Almmno</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>Materia</th>
                <th>Maestro</th>
                <th>Horario</th>
                <th>Dias</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asignaturaalumno as $aa)
            <tr>
                <td>{{$aa->alumnos->nombre}} {{$aa->alumnos->primer_apellido}}{{$aa->alumnos->segundo_apellido}}</td>
                <td>{{$aa->alumnos->grupo->carrera->nombre}}</td>
                <td>{{$aa->alumnos->grupo->semestre}}°</td>
                <td>{{$aa->asignatura->nombre}}</td>
                <td>{{$aa->asignatura->recursoshumanos->nombre}} {{$aa->asignatura->recursoshumanos->apellido_paterno}} {{$aa->asignatura->recursoshumanos->apellido_materno}}</td>
                <td>{{$aa->asignatura->inicio_clase}} - {{$aa->asignatura->fin_clase}}</td>
                <td>{{$aa->asignatura->dias_imparticion}}</td>
                <td><a href="{{route('vinculacion_editar', $aa)}}"><button class="btn btn-primary btn-sm">Editar</button></a></td>
                <td><form action="{{route('vinculacion_eliminar', $aa)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$asignaturaalumno->links()}}

@endsection