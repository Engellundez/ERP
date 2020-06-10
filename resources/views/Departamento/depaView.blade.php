@extends('layouts.base')

@section('title')
Departamentos
@endsection

@section('content')
<br>
<h1>Departamentos</h1>
<br>
<a href="{{ route('depa_create') }}"><button class="btn btn-success">Agregar</button></a>
<br><br>
@if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
@endif
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre del Departamento</th>
            <th colspan="2" scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($depa as $item)
            <tr>
                <th scope="row">{{$item->nombre}}</th>
                <td>
                    <a href="{{route('depa_editar', $item)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                </td>
                <td>
                <form action="{{route('depa_eliminar', $item)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$depa->links()}}
@endsection