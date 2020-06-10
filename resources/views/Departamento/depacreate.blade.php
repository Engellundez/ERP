@extends('layouts.base')

@section('title')
Departamento
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('depa')}}"><button class="btn btn-primary btn-block">Regresar a los Departamentos</button></a>
<br>
<form action="{{route('depa_guardar')}}" method="POST">
    @csrf
    @error('nombre')
        <div class="alert alert-danger">
            El nombre del Departamento es necesario
        </div>
    @enderror

    <label>Nombre del Departamento</label>
    <input type="text" name="nombre" placeholder="Nombre del departamento" class="form-control mb-2" value="{{old('nombre')}}">

    <button type="submit" class="btn btn-success mb-2">Agregar Departamento</button>
</form>
@endsection