@extends('layouts.base')

@section('title')
Carrera
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success my-3">
    {{session('mensaje')}}
</div>
@endif

<a href="{{route('carrera')}}"><button class="btn btn-primary btn-block my-3">Regresar al listado</button></a>

<form action="{{route('carrera_guardar')}}" method="post">
    @csrf

    @error('nombre')
    <div class="alert alert-danger">Escriba el nombre de la Carrera</div>
    @enderror

    <label>Nombre de la Carrera</label>
    <input type="text" class="form-control mb-2" name="nombre" placeholder="Nombre de Carrera" value="{{old('nombre')}}">

    <button type="submit" class="btn btn-primary my-3">Agregar Carrera</button>
</form>
@endsection