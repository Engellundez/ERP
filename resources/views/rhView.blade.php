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
                <th scope="row">{{$item->entidad_id}}</th>
                <td>{{$item->universidad_id}}</td>
                <td>{{$item->departamento_id}}</td>
                <td>{{$item->puesto_id}}</td>
                <td>${{$item->presupuesto}}</td>
                <td>{{$item->nombre}} {{$item->apellido_paterno}} {{$item->apellido_materno}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->colonia}} {{$item->direccion}}</td>
                <td>{{$item->telefono}}</td>
                <td>
                    <a href=""><button class="btn btn-primary">Editar</button></a>
                </td>
                <td>
                    <a href=""><button class="btn btn-danger">Eliminar</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
