@extends('layouts.base')

@section('title')
Puesto
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('pues')}}"><button class="btn btn-primary btn-block">Regresar a los Puestos</button></a>
<br>
<form action="{{route('pues_guardar')}}" method="POST">
    @csrf
    @error('nombre')
        <div class="alert alert-danger">
            El nombre del Puesto es necesario
        </div>
    @enderror

    <label>Nombre del Puesto</label>
    <input type="text" name="nombre" placeholder="Nombre del Puesto" class="form-control mb-2" value="{{old('nombre')}}">

    <button type="submit" class="btn btn-success mb-2">Agregar Puesto</button>
</form>
@endsection