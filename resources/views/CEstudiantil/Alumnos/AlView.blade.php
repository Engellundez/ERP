@extends('layouts.base')

@section('title')
Alumnos
@endsection

@section('content')
<h1 class="my-3">Alumnos</h1>
<a href="{{route('alumnos_create')}}"><button class="btn btn-success">Agregar Alumno</button></a>

@if(session('mensaje'))
<div class="alert alert-danger my-2">{{session('mensaje')}}</div>
@endif

<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Grupo</th>
                <th>Carrera</th>
                <th>Universidad</th>
                <th>Correo</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($al as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->primer_apellido}}</td>
                <td>{{$alumno->segundo_apellido}}</td>
                <td>{{$alumno->grupo->semestre}}°</td>
                <td>{{$alumno->grupo->carrera->nombre}}</td>
                <td>{{$alumno->universidad->nombre}}</td>
                <td>{{$alumno->correo}}</td>
                <td><a href="{{route('alumnos_ver', $alumno)}}"><button class="btn btn-primary btn-sm">Ver</button></a></td>
                <td><a href="{{route('alumnos_editar', $alumno)}}"><button class="btn btn-primary btn-sm">Editar</button></a></td>
                <td><form action="{{route('alumnos_eliminar', $alumno)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$al->links()}}

@endsection