@extends('layouts.base')

@section('title')
Universidad
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('uni')}}"><button class="btn btn-primary btn-block">Regresar a las universidades</button></a>
<br>
<form action="{{route('uni_guardar')}}" method="POST">
    @csrf
    @error('nombre')
        <div class="alert alert-danger">
            El nombre de la universidad es necesario
        </div>
    @enderror

    <label>Nombre de la Universidad</label>
    <input type="text" name="nombre" placeholder="Nombre de la universidad" class="form-control mb-2" value="{{old('nombre')}}">
    
    @error('ciudad')
        <div class="alert alert-danger">
            La Ciudad donde se localiza la universidad es necesaria
        </div>
    @enderror

    <label>Ciudad</label>
    <input type="text" name="ciudad" placeholder="ciudad donde se ubica la universidad" class="form-control mb-2" value="{{old('ciudad')}}">

    <button type="submit" class="btn btn-success mb-2">Agregar Universidad</button>
</form>
@endsection