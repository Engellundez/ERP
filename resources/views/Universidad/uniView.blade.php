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
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre de la Universidad</th>
            <th scope="col">Cuidad</th>
            <th colspan="2" scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($uni as $item)
            <tr>
                <th scope="row">{{$item->nombre}}</th>
                <td>{{$item->ciudad}}</td>
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
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
