@extends('layouts.base')

@section('title')
Universidad - Editar
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-warning">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('uni')}}"><button class="btn btn-primary btn-block">Regresar a las universidades</button></a>
<br>
<form action="{{route('uni_actualizar', $uni->id)}}" method="POST">
    @method('PUT')
    @csrf

    @error('nombre')
        <div class="alert alert-danger">
            El nombre de la universidad es necesario
        </div>
    @enderror

    <label>Nombre de la Universidad</label>
    <input type="text" name="nombre" placeholder="Nombre de la universidad" class="form-control mb-2" value="{{$uni->nombre}}">
    
    @error('entidad_id')
        <div class="alert alert-danger">
            Escoja una Entidad
        </div>
    @enderror
    
    <label>Entidad</label>
    <select name="entidad_id" class="form-control mb-2">
        <option value="{{$uni->entidad_id}}">{{$uni->entidad->nombre}}</option>
        @foreach($enti as $item)
            <option value="{{$item->id}}">{{$item->nombre}}</option>
        @endforeach
    </select>

    @error('ciudad')
        <div class="alert alert-danger">
            La Ciudad donde se localiza la universidad es necesaria
        </div>
    @enderror

    <label>Ciudad</label>
    <input type="text" name="ciudad" placeholder="ciudad donde se ubica la universidad" class="form-control mb-2" value="{{$uni->ciudad}}">

    <button type="submit" class="btn btn-warning mb-2">Editar Universidad</button>
</form>
@endsection