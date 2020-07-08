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

    @error('departamento_id')
        <div class="alert alert-danger">
            Se necesita un departamento
        </div>
    @enderror

    <label>Nombre del departamento</label>
    <select name="departamento_id" class="form-control mb-2">
        <option value="">Selecciona un Departamento</option>
        @foreach($depa as $item)
            <option value="{{$item->id}}">{{$item->nombre}}</option>
        @endforeach
    </select>

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