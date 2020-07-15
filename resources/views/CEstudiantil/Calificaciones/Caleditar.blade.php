@extends('layouts.base')

@section('title')
Calificaciones
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success my-3">{{session('mensaje')}}</div>
@endif

<a href="{{route('calificacion')}}"><button class="btn btn-primary btn-block my-3">Regresar al listado</button></a>

<label>Calificacion Final</label>
<input type="text" disabled class="form-control mb-2" value="{{$cal->calificacion_final}}">
<br><br>

<form action="{{route('calificacion_actualizar', $cal->id)}}" method="post">
    @method('PUT')
    @csrf
    
    <label>parcial 1</label>
    <input type="number" name="parcial1" min="0" max="10" class="form-control mb-2" value="{{$cal->parcial1}}">

    <label>parcial 2</label>
    <input type="number" name="parcial2" min="0" max="10" class="form-control mb-2" value="{{$cal->parcial2}}">

    <label>parcial 3</label>
    <input type="number" name="parcial3" min="0" max="10" class="form-control mb-2" value="{{$cal->parcial3}}">

    <button type="submit" class="btn btn-warning my-3">Actualizar Calificacion</button>
</form>

@endsection