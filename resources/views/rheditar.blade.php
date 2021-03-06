@extends('layouts.base')

@section('title')
Recursos Humanos - Editar
@endsection

@section('content')

<br>
@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('rh')}}"><button class="btn btn-primary btn-block">Regresar al listado</button></a>
<br>
<form action="{{route('rhactualizar', $rh->id)}}" method="POST">
    @method('PUT')
    @csrf

    <!-- Id siguiente para guardar todo en uno solo click -->
    <input name="universidad_departamento_puesto_id" type="hidden" value="{{$rh->universidadDepartamentoPuesto->id}}">

    @error('universidad_id')
        <div class="alert alert-danger">
            Escoja una Universidad
        </div>
    @enderror

    <label>Universidad</label>
    <select name="universidad_id" class="form-control mb-2">
        <option value="{{$rh->universidadDepartamentoPuesto->universidad->id}}">{{$rh->universidadDepartamentoPuesto->universidad->nombre}} - {{$rh->universidadDepartamentoPuesto->universidad->ciudad}} - {{$rh->universidadDepartamentoPuesto->universidad->entidad->nombre}}</option>
        @foreach($uni as $item)
            <option value="{{$item->id}}">{{$item->nombre}} - {{$item->ciudad}} - {{$item->entidad->nombre}}</option>
        @endforeach
    </select>

    @error('puesto_id')
        <div class="alert alert-danger">
            Escoja un puesto
        </div>
    @enderror

    <label>Departamento/Puesto</label>
    <select name="puesto_id" class="form-control mb-2">
        <option value="{{$rh->universidadDepartamentoPuesto->puesto->id}}">{{$rh->universidadDepartamentoPuesto->puesto->departamento->nombre}} - {{$rh->universidadDepartamentoPuesto->puesto->nombre}}</option>
        @foreach($pues as $item)
            <option value="{{$item->id}}">{{$item->departamento->nombre}} - {{$item->nombre}}</option>
        @endforeach
    </select>

    @error('presupuesto')
        <div class="alert alert-danger">
            Escriba el Presupuesto
        </div>
    @enderror

    <label>Presupuesto</label>
    <input name="presupuesto" type="number" placeholder="Presupuesto" class="form-control mb-2" value="{{$rh->presupuesto}}">

    @error('nombre')
        <div class="alert alert-danger">
            Escriba el nombre o nombres
        </div>
    @enderror

    <label>Nombre(s)</label>
    <input name="nombre" type="text" placeholder="Nombre(s)" class="form-control mb-2" value="{{$rh->nombre}}">

    @error('apellido_paterno')
        <div class="alert alert-danger">
            Escriba el apellido paterno
        </div>
    @enderror

    <label>Apellido Paterno</label>
    <input name="apellido_paterno" type="text" placeholder="Apellido Paterno" class="form-control mb-2" value="{{$rh->apellido_paterno}}">

    @error('apellido_materno')
        <div class="alert alert-danger">
            Escriba el apellido materno
        </div>
    @enderror

    <label>Apellido Materno</label>
    <input name="apellido_materno" type="text" placeholder="Apellido Materno" class="form-control mb-2" value="{{$rh->apellido_materno}}">

    @error('fecha_nacimiento')
        <div class="alert alert-danger">
            Escriba la fecha de nacimiento
        </div>
    @enderror

    <label>Fecha de Nacimiento</label>
    <input name="fecha_nacimiento" type="date" placeholder="Fecha de Nacimiento" class="form-control mb-2" value="{{$rh->fecha_nacimiento}}">

    @error('email')
        <div class="alert alert-danger">
            Escriba un correo electronico
        </div>
    @enderror

    <label>Correo</label>
    <input name="email" type="email" placeholder="Correo" class="form-control mb-2" value="{{$rh->email}}">

    @error('direccion')
        <div class="alert alert-danger">
            Escriba la direccion
        </div>
    @enderror

    <label>Dirección</label>
    <input name="direccion" type="text" placeholder="Dirección" class="form-control mb-2" value="{{$rh->direccion}}">

    @error('colonia')
        <div class="alert alert-danger">
            Escriba la colonia
        </div>
    @enderror

    <label>Colonia</label>
    <input name="colonia" type="text" placeholder="Colonia" class="form-control mb-2" value="{{$rh->colonia}}">

    @error('telefono')
        <div class="alert alert-danger">
            Escriba el telefono
        </div>
    @enderror

    <label>Telefono</label>
    <input name="telefono" type="number" placeholder="Telefono" class="form-control mb-2" value="{{$rh->telefono}}">

    <br>

    <button type="submit" class="btn btn-warning">Actualizar</button>

    <br><br>
</form>
@endsection
