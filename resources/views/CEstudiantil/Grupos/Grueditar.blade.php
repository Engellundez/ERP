@extends('layouts.base')

@section('title')
Grupo
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success my-3">{{session('mensaje')}}</div>
@endif

<a href="{{route('grupo')}}"><button class="btn btn-primary btn-block my-3">Regresar al listado</button></a>

<form action="{{route('grupo_actualizar', $gru->id)}}" method="post">
    @method('PUT')
    @csrf

    @error('semestre')
    <div class="alert alert-danger">Escriba el Semestre</div>
    @enderror

    <label>Semestre</label>
    <input type="number" name="semestre" class="form-control mb-2" placeholder="Semestre" value="{{$gru->semestre}}">

    @error('carrera_id')
    <div class="alert alert-danger">Escoja una carrera para agregar semestre</div>
    @enderror

    <label>Carreras</label>
    <select name="carrera_id" id="" class="form-control mb-2">
        <option value="{{$gru->carrera_id}}">{{$gru->carrera->nombre}}</option>
        @foreach($car as $carrera)
        <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-warning my-3">Actualizar</button>
</form>

@endsection