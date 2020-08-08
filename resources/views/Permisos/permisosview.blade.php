@extends('layouts.base')

@section('title')
Permisos
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
<h1 class="my-3">Permisos</h1>
@role('super-usuario')
    <a class="my-3" href="{{ route('permisos_create') }}"><button class="btn btn-success">Agregar Permiso</button></a>
@endrole


<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                @role('super-usuario')
                    <th colspan="2" scope="col">Acciones</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach($permisos as $permiso)
                <tr>
                    <th scope="row">{{$permiso->name}}</th>
                    <td>{{$permiso->description}}</td>
                    @role('super-usuario')
                        <td>
                            <a href="{{route('permisos_editar', $permiso)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                        </td>
                        <td>
                        <form action="{{route('permisos_eliminar', $permiso)}}" method="POST">
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
{{$permisos->links()}}
@endsection
