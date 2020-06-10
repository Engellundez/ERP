@extends('layouts.base')

@section('title')
Puesto - Editar
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-warning">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('pues')}}"><button class="btn btn-primary btn-block">Regresar a los puestos</button></a>
<br>
<form action="{{route('pues_actualizar', $pues->id)}}" method="POST">
    @method('PUT')
    @csrf

    @error('nombre')
        <div class="alert alert-danger">
            El nombre del puesto es necesario
        </div>
    @enderror

    <label>Nombre del puesto</label>
    <input type="text" name="nombre" placeholder="Nombre del puesto" class="form-control mb-2" value="{{$pues->nombre}}">

    <button type="submit" class="btn btn-warning mb-2">Editar puesto</button>
</form>
@endsection