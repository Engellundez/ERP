@extends('layouts.base')

@section('title')
alumnos
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success my-3">{{session('mensaje')}}</div>
@endif

<a href="{{route('alumnos')}}"><button class="btn btn-primary btn-block my-3">Regresar al listado</button></a>

<form action="{{route('alumnos_guardar')}}" method="post">
    @csrf

    @error('nombre')
    <div class="alert alert-danger">Escriba el Nombre</div>
    @enderror

    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" value="{{old('nombre')}}">

    @error('primer_apellido')
    <div class="alert alert-danger">Escriba el Primer Apellido</div>
    @enderror

    <label>Primer Apellido</label>
    <input type="text" name="primer_apellido" class="form-control mb-2" placeholder="Primer Apellido" value="{{old('primer_apellido')}}">

    @error('segundo_apellido')
    <div class="alert alert-danger">Escriba el Segundo Apellido</div>
    @enderror

    <label>Segundo Apellido</label>
    <input type="text" name="segundo_apellido" class="form-control mb-2" placeholder="Segundo Apellido" value="{{old('segundo_apellido')}}">

    @error('fecha_nacimiento')
    <div class="alert alert-danger">Escriba la Fecha de Nacimiento</div>
    @enderror

    <label>Fecha de Nacimiento</label>
    <input type="date" name="fecha_nacimiento" class="form-control mb-2" placeholder="Fecha de Nacimiento" value="{{old('fecha_nacimiento')}}">

    @error('grupo_id')
    <div class="alert alert-danger">Escoja un grupo</div>
    @enderror

    <label>Grupo</label>
    <select name="grupo_id" class="form-control mb-2">
        <option value="">Selecciona una Opcion</option>
        @foreach($gru as $grupo)
        <option value="{{$grupo->id}}">{{$grupo->semestre}}° - {{$grupo->carrera->nombre}}</option>
        @endforeach
    </select>

    @error('universidad_id')
    <div class="alert alert-danger">Escoja una universidad</div>
    @enderror

    <label>Universidad</label>
    <select name="universidad_id" class="form-control mb-2">
        <option value="">Seleccione una Universidad</option>
        @foreach($uni as $universidad)
        <option value="{{$universidad->id}}">{{$universidad->nombre}} - {{$universidad->ciudad}} - {{$universidad->entidad->nombre}}</option>
        @endforeach
    </select>

    @error('correo')
    <div class="alert alert-danger">Escriba el Correo</div>
    @enderror

    <label>Correo</label>
    <input type="email" name="correo" class="form-control mb-2" placeholder="Correo" value="{{old('correo')}}">

    <button type="submit" class="btn btn-primary my-3">Agregar Alumno</button>
</form>

@endsection
