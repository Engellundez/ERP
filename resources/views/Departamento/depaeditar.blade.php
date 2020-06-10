@extends('layouts.base')

@section('title')
Departamento - Editar
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-warning">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('depa')}}"><button class="btn btn-primary btn-block">Regresar a los departamentos</button></a>
<br>
<form action="{{route('depa_actualizar', $depa->id)}}" method="POST">
    @method('PUT')
    @csrf

    @error('nombre')
        <div class="alert alert-danger">
            El nombre del departamento es necesario
        </div>
    @enderror

    <label>Nombre del Departamento</label>
    <input type="text" name="nombre" placeholder="Nombre del departamento" class="form-control mb-2" value="{{$depa->nombre}}">

    <button type="submit" class="btn btn-warning mb-2">Editar Departamento</button>
</form>
@endsection