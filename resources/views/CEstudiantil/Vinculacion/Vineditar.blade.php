@extends('layouts.base')

@section('title')
Vinculacion
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success my-3">{{session('mensaje')}}</div>
@endif

<a href="{{route('vinculacion')}}"><button class="btn btn-primary btn-block my-3">Regresar al Listado</button></a>

<form action="{{route('vinculacion_actualizar', $aa)}}" method="post">
    @method('PUT')
    @csrf

    @error('alumno_id')
    <div class="alert alert-danger">Escoje un alumno</div>
    @enderror

    <label>Alumno</label>
    <select name="alumno_id" class="form-control mb-2">
        <option value="{{$aa->alumnos->id}}">{{$aa->alumnos->nombre}} {{$aa->alumnos->primer_apellido}} {{$aa->alumnos->segundo_apellido}} - {{$aa->alumnos->grupo->semestre}}° - {{$aa->alumnos->grupo->carrera->nombre}}</option>
        @foreach($alumnos as $al)
        <option value="{{$al->id}}">{{$al->nombre}} {{$al->primer_apellido}} {{$al->segundo_apellido}} - {{$al->grupo->semestre}}° - {{$al->grupo->carrera->nombre}}</option>
        @endforeach
    </select>

    @error('asignatura_id')
    <div class="alert alert-danger">Escoje la materia</div>
    @enderror

    <label>Asignatura</label>
    <select name="asignatura_id" class="form-control mb-2">
        <option value="{{$aa->asignatura->id}}">{{$aa->asignatura->nombre}} - {{$aa->asignatura->semestre}}° {{$aa->asignatura->dias_imparticion}}</option>
        @foreach($asignaturas as $asi)
        <option value="{{$asi->id}}">{{$asi->nombre}} - {{$asi->semestre}}° {{$asi->dias_imparticion}}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-warning my-3">Actualizar Vinculacion</button>
</form>

@endsection