@extends('layouts.base')

@section('title')
{{$alu->nombre}} {{$alu->primer_apellido}} {{$alu->segundo_apellido}}, Alumno
@endsection

@section('content')

<a href="{{route('alumnos')}}"><button class="btn btn-primary btn-block my-3">Regresar al listado</button></a>

<div class="table-responsive my-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Fecha Nacimiento</th>
                <th>Universidad</th>
                <th>Grupo</th>
                <th>Carrera</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$alu->nombre}} {{$alu->primer_apellido}} {{$alu->segundo_apellido}}</td>
                <td>{{$alu->fecha_nacimiento}}</td>
                <td>{{$alu->universidad->nombre}}</td>
                <td>{{$alu->grupo->semestre}}</td>
                <td>{{$alu->grupo->carrera->nombre}}</td>
                <td>{{$alu->correo}}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="table-responsive my-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Materia</th>
                <th>Parcial 1</th>
                <th>Parcial 2</th>
                <th>Parcial 3</th>
                <th>Calificacion Final</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
            @if($cal == "[]")
            <tr>
                <td colspan="5">Sin Materias Asignadas</td>
            </tr>
            @else()
                @foreach($cal as $calificacion)
                <tr>
                    <td>{{$calificacion->asignatura->nombre}}</td>

                    @if($calificacion->calificaciones->parcial1 != NULL)
                    <td>{{$calificacion->calificaciones->parcial1}}</td>
                    @else
                    <td>Sin Calificar</td>
                    @endif

                    @if($calificacion->calificaciones->parcial2 != NULL)
                    <td>{{$calificacion->calificaciones->parcial2}}</td>
                    @else
                    <td>Sin Calificar</td>
                    @endif

                    @if($calificacion->calificaciones->parcial3 !=NULL)
                    <td>{{$calificacion->calificaciones->parcial3}}</td>
                    @else
                    <td>Sin Calificar</td>
                    @endif

                    @if($calificacion->calificaciones->calificacion_final != NULL)
                    <td>{{$calificacion->calificaciones->calificacion_final}}</td>
                    @else
                    <td>Sin Asignar</td>
                    @endif

                    <td><a href="{{route('calificacion_editar', $calificacion)}}"><button class="btn btn-primary btn-sm">Agregar/Editar Calificacion</button></a></td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection
