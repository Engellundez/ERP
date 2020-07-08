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

    @error('departamento_id')
        <div class="alert alert-danger">
            Se necesita un departamento
        </div>
    @enderror

    <label>Nombre del departamento</label>
    <select name="departamento_id" class="form-control mb-2">
        <option value="{{$pues->departamento_id}}">{{$pues->departamento->nombre}}</option>
        @foreach($depa as $item)
            <option value="{{$item->id}}">{{$item->nombre}}</option>
        @endforeach
    </select>

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