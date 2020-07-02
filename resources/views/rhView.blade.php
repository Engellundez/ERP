@extends('layouts.base')

@section('title')
Recursos Humanos
@endsection

@section('content')
<br>
<h1>Recursos Humanos</h1>
<br>
<a href="{{ route('rh_create') }}"><button class="btn btn-success">Agregar</button></a>
<br><br>
@if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
@endif
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Entidad Federativa</th>
            <th scope="col">Universidad</th>
            <th scope="col">Departamento</th>
            <th scope="col">Puesto</th>
            <th scope="col">Presupuesto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Dirección</th>
            <th scope="col">Telefono</th>
            <th colspan="2" scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($RH as $item)
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td>${{$item->presupuesto}}</td>
                <td>{{$item->nombre}} {{$item->apellido_paterno}} {{$item->apellido_materno}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->colonia}} {{$item->direccion}}</td>
                <td>{{$item->telefono}}</td>
                <td>
                    <a href="{{route('rh_editar', $item)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                </td>
                <td>
                <form action="{{route('rh_eliminar', $item)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$RH->links()}}
@endsection
