@extends('layouts.base')

@section('title')
Editar a {{$user->name}}
@endsection

@section('content')
@if(session('mensaje'))
    <div class="alert alert-warning">
        {{session('mensaje')}}
    </div>
@endif
<a href="{{route('users')}}"><button class="btn btn-primary btn-block">Regresar a las usuarios</button></a>
<form class="my-3" action="{{route('users_actualizar', $user->id)}}" method="POST">
    @method('PUT')
    @csrf

    @error('name')
        <div class="alert alert-danger">
            El nombre del usuario es necesario
        </div>
    @enderror

    <label>Nombre</label>
    <input type="text" name="name" placeholder="Nombre del usuario" class="form-control mb-2" value="{{$user->name}}">
    
    @error('email')
        <div class="alert alert-danger">
            El Correo es necesario
        </div>
    @enderror
    
    <label>Correo</label>
    <input type="text" name="email" placeholder="ejemplo@ejemplo.com" class="form-control mb-2" value="{{$user->email}}">
    
    <h3>Lista de roles</h3>
    
    <input type="text" disabled="true" class="form-control mb-2" value="Roles: @foreach($user->roles as $rol){{ $loop->last ? $rol->name : $rol->name .','}}@endforeach">
    
    @error('roles')
        <div class="alert alert-danger">
            Escoge minimo un Rol
        </div>
    @enderror
    <div class="form-group" style="text-align:left;">
        <ul class="list-unstyled">
            @foreach($roles as $rol)
                <li>
                    <label >
                        <input type="checkbox" name="roles[]" value="{{$rol->id}}">
                        <h5 style="display:inline;">{{$rol->name}}</h5>
                        <em>({{ $rol->description }})</em>
                    </label>
                    
                </li>
            @endforeach
        </ul>
    </div>

    <button type="submit" class="btn btn-warning mb-2 my-3">Editar Usuario</button>
</form>
@endsection