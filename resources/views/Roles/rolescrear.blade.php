@extends('layouts.base')

@section('title')
crear Roles
@endsection

@section('content')
@if(session('mensaje'))
    <div class="alert alert-warning">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('roles')}}"><button class="btn btn-primary btn-block">Regresar a los roles</button></a>
<form class="my-5" action="{{route('roles_guardar')}}" method="POST">
   @csrf

    <input type="hidden" name="rol_id" value="{{$rol}}">
    @error('name')
        <div class="alert alert-danger">
            El nombre del rol es necesario
        </div>
    @enderror

    <label>Nombre</label>
    <input type="text" name="name" placeholder="Nombre del rol" class="form-control mb-2" value="{{old('name')}}">
    
    @error('description')
        <div class="alert alert-danger">
            La descripción es necesaria
        </div>
    @enderror
    
    <label>Descripción</label>
    <input type="text" name="description" placeholder="descripción del rol" class="form-control mb-2" value="{{old('description')}}">
    
    <h3>Lista de Permisos</h3>

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

    <button type="submit" class="btn btn-success mb-2 my-3">Crear Rol</button>
</form>
@endsection