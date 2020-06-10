@extends('layouts.base')

@section('title')
Entidad - Editar
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-warning">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('enti')}}"><button class="btn btn-primary btn-block">Regresar a los Entidades</button></a>
<br>
<form action="{{route('enti_actualizar', $enti->id)}}" method="POST">
    @method('PUT')
    @csrf

    @error('nombreEntidad')
        <div class="alert alert-danger">
            El nombre del Entidad es necesario
        </div>
    @enderror

    <label>Nombre del Entidad</label>
    <input type="text" name="nombreEntidad" placeholder="Nombre del Entidad" class="form-control mb-2" value="{{$enti->nombreEntidad}}">

    <button type="submit" class="btn btn-warning mb-2">Editar Entidad</button>
</form>
@endsection