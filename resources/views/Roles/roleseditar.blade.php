@extends('layouts.base')

@section('title')
Editar a {{$rol->name}}
@endsection

@section('content')
@if(session('mensaje'))
    <div class="alert alert-warning">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('roles')}}"><button class="btn btn-primary btn-block">Regresar a las roles</button></a>
<form class="my-3" action="{{route('roles_actualizar', $rol->id)}}" method="POST">
    @method('PUT')
    @csrf

    @error('name')
        <div class="alert alert-danger">
            El nombre del rol es necesario
        </div>
    @enderror

    <label>Nombre</label>
    <input type="text" name="name" placeholder="Nombre del usuario" class="form-control mb-2" value="{{$rol->name}}">
    
    @error('description')
        <div class="alert alert-danger">
            La descripcion es necesaria
        </div>
    @enderror
    
    <label>Descripcion</label>
    <input type="text" name="description" placeholder="descripcion" class="form-control mb-2" value="{{$rol->description}}">
    
    <h3>Lista de permisos</h3>
    
    <input type="text" disabled="true" class="form-control mb-2" value="Roles: @foreach($rol->permissions as $permission){{ $loop->last ? $permission->name : $permission->name .','}}@endforeach">
    
    @error('permissions')
        <div class="alert alert-danger">
            Escoge minimo 1 permiso
        </div>
    @enderror

    <div class="form-group" style="text-align:left;">
        <ul class="list-unstyled">
            @foreach($permissions as $permission)
                <li>
                    <label >
                        <input type="checkbox" name="permissions[]" value="{{$permission->id}}">
                        <h5 style="display:inline;">{{$permission->name}}</h5>
                        <em>({{ $permission->description }})</em>
                    </label>
                    
                </li>
            @endforeach
        </ul>
    </div>

    <button type="submit" class="btn btn-warning mb-2 my-3">Editar Rol</button>
</form>
@endsection