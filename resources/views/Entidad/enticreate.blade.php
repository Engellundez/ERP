@extends('layouts.base')

@section('title')
Entidad
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('enti')}}"><button class="btn btn-primary btn-block">Regresar a los Entidades</button></a>
<br>
<form action="{{route('enti_guardar')}}" method="POST">
    @csrf
    @error('nombreEntidad')
        <div class="alert alert-danger">
            El nombre del Entidad es necesario
        </div>
    @enderror

    <label>Nombre del Entidad</label>
    <input type="text" name="nombreEntidad" placeholder="Nombre del Entidad" class="form-control mb-2" value="{{old('nombreEntidad')}}">

    <button type="submit" class="btn btn-success mb-2">Agregar Entidad</button>
</form>
@endsection