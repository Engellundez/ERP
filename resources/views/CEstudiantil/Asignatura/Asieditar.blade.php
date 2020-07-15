@extends('layouts.base')

@section('title')
alumnos
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success my-3">{{session('mensaje')}}</div>
@endif

<a href="{{route('asignatura')}}"><button class="btn btn-primary btn-block my-3">Regresar al listado</button></a>

<form action="{{route('asignatura_actualizar', $asignatura->id)}}" method="post">
    @method('PUT')
    @csrf

    @error('recursos_humanos_id')
    <div class="alert alert-danger">Escoja un Maestro</div>
    @enderror

    <label>Maestro</label>
    <select name="recursos_humanos_id" id="" class="form-control mb-2">
        <option value="{{$asignatura->recursoshumanos->id}}">{{$asignatura->recursoshumanos->nombre}} {{$asignatura->recursoshumanos->apellido_paterno}} {{$asignatura->recursoshumanos->apellido_materno}}</option>
        @foreach($recursoshumanos as $rh)
        @if($rh->universidadDepartamentoPuesto->puesto_id == '1')
        <option value="{{$rh->id}}">{{$rh->nombre}} {{$rh->apellido_paterno}} {{$rh->apellido_materno}}</option>
        @endif
        @endforeach
    </select>

    @error('nombre')
    <div class="alert alert-danger">Escribe el Nombre de la materia</div>
    @enderror

    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" value="{{$asignatura->nombre}}">

    @error('semestre')
    <div class="alert alert-danger">Escribe el semestre donde se imparte</div>
    @enderror

    <label>semestre</label>
    <input type="text" name="semestre" class="form-control mb-2" placeholder="semestre" value="{{$asignatura->semestre}}">

    @error('inicio_clase')
    <div class="alert alert-danger">Escribe el Inicio de clase </div>
    @enderror

    <label>Inicio de clase</label>
    <input type="time" name="inicio_clase" class="form-control mb-2" placeholder="Inicio de clase" value="{{$asignatura->inicio_clase}}">

    @error('fin_clase')
    <div class="alert alert-danger">Escribe el Fin de clase</div>
    @enderror

    <label>Fin de clase</label>
    <input type="time" name="fin_clase" class="form-control mb-2" placeholder="Fin de clase" value="{{$asignatura->fin_clase}}">

    @error('dias_imparticion')
    <div class="alert alert-danger">Escribe el Dias que se imparte</div>
    @enderror

    <label>Dias que se imparte</label>
    <input type="text" name="dias_imparticion" class="form-control mb-2" placeholder="Dias que se imparte" value="{{$asignatura->dias_imparticion}}">

    <button type="submit" class="btn btn-warning my-3">actulizar Materia</button>
</form>

@endsection
