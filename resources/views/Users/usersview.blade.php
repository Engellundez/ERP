@extends('layouts.base')

@section('title')
Usuarios
@endsection

@section('content')
<br>
@if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
@endif
@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<h1 class="my-3">Usuarios</h1>
@role('super-usuario')
    <a class="my-3" href="{{ route('users_create') }}"><button class="btn btn-success">Agregar rol</button></a>
@endrole


<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Roles</th>
                <th scopo="col">Permisos Extras</th>
                @role('super-usuario')
                    <th colspan="3" scope="col">Acciones</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach($user->roles as $rol)
                            {{ $loop->last ? $rol->name : $rol->name .","}}
                        @endforeach
                    </td>
                    <td>
                        @foreach($user->permissions as $permiso)
                            {{ $loop->last ? $permiso->name : $permiso->name .","}}
                        @endforeach
                    </td>
                    @role('super-usuario')
                        <td>
                            <a href="{{route('users_crearp', $user)}}"><button class="btn btn-primary btn-sm">dar permiso extra</button></a>
                        </td>
                        <td>
                            <a href="{{route('users_editar', $user)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                        </td>
                        <td>
                        <form action="{{route('users_eliminar', $user)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                        </td>
                    @endrole
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$users->links()}}
@endsection
