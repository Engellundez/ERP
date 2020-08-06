@extends('layouts.base')

@section('title')
Universidades
@endsection

@section('content')
<br>
<h1>Universidades</h1>
<br>
<a href="{{ route('uni_create') }}"><button class="btn btn-success">Agregar</button></a>
<br><br>

@if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre del Rol</th>
                <th scope="col">descripcion</th>
                <th colspan="2" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $rol)
                <tr>
                    <th scope="row">{{$rol->name}}</th>
                    <td>{{$rol->guard_name}}</td>
                    <td>
                        <a href="{{route('uni_editar', $rol)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                    </td>
                    <td>
                    <form action="{{route('uni_eliminar', $rol)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$roles->links()}}
@endsection
