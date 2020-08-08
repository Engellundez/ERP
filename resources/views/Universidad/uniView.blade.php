@extends('layouts.base')

@section('title')
Universidades
@endsection

@section('content')
<br>
<h1 class="my-3">Universidades</h1>
@role('super-usuario|admin')
    <a href="{{ route('uni_create') }}" class="my-3"><button class="btn btn-success">Agregar</button></a>
@endrole

@if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
@endif

<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre de la Universidad</th>
                <th scope="col">Entidad</th>
                <th scope="col">Cuidad</th>
                @role('super-usuario|admin')
                <th colspan="2" scope="col">Acciones</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach($uni as $item)
                <tr>
                    <th scope="row">{{$item->nombre}}</th>
                    <td>{{$item->entidad->nombre}}</td>
                    <td>{{$item->ciudad}}</td>
                    @role('super-usuario|admin')
                        <td>
                            <a href="{{route('uni_editar', $item)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                        </td>
                        <td>
                        <form action="{{route('uni_eliminar', $item)}}" method="POST">
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
    {{$uni->links()}}
@endsection
