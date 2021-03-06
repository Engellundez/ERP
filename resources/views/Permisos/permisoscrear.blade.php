@extends('layouts.base')

@section('title')
crear Permiso
@endsection

@section('content')
@if(session('mensaje'))
    <div class="alert alert-warning">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('permisos')}}"><button class="btn btn-primary btn-block">Regresar a las permisos</button></a>
<form class="my-5" action="{{route('permisos_guardar')}}" method="POST">
   @csrf

    @error('name')
        <div class="alert alert-danger">
            El nombre del permiso es necesario
        </div>
    @enderror

    <label>Nombre</label>
    <input type="text" name="name" placeholder="Nombre del permiso" class="form-control mb-2" value="{{old('name')}}">
    
    @error('description')
        <div class="alert alert-danger">
            La descripción es necesaria
        </div>
    @enderror
    
    <label>Descripción</label>
    <input type="text" name="description" placeholder="descripción del permiso" class="form-control mb-2" value="{{old('description')}}">

    <button type="submit" class="btn btn-success mb-2 my-3">Crear permiso</button>
</form>
@endsection