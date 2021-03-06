@extends('layouts.base')

@section('title')
Roles
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
<h1 class="my-3">Roles</h1>
@role('super-usuario')
    <a class="my-3" href="{{ route('roles_create') }}"><button class="btn btn-success">Agregar rol</button></a>
@endrole


<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Permisos</th>
                @role('super-usuario')
                    <th colspan="2" scope="col">Acciones</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $rol)
                <tr>
                    <th scope="row">{{$rol->name}}</th>
                    <td>{{$rol->description}}</td>
                    <td>
                        @foreach($rol->permissions as $permission)
                            {{ $loop->last ? $permission->name : $permission->name .","}}
                        @endforeach
                    </td>
                    @role('super-usuario')
                        <td>
                            <a href="{{route('roles_editar', $rol)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                        </td>
                        <td>
                        <form action="{{route('roles_eliminar', $rol)}}" method="POST">
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
{{$roles->links()}}
@endsection
