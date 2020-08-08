@extends('layouts.base')

@section('title')
Puestos
@endsection

@section('content')
<br>
<h1 class="my-4">Puestos</h1>
@role('super-usuario|admin')
    <a class="my-4" href="{{ route('pues_create') }}"><button class="btn btn-success">Agregar</button></a>
@endrole
<br><br>

@if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
@endif

<div class="table-responsive my-4">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre del Puesto</th>
                <th scope="col">Departamento</th>
                @role('super-usuario|admin')
                    <th colspan="2" scope="col">Acciones</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach($pues as $item)
                <tr>
                    <th scope="row">{{$item->nombre}}</th>
                    <th scope="row">{{$item->departamento->nombre}}</th>
                    @role('super-usuario|admin')
                        <td>
                            <a href="{{route('pues_editar', $item)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                        </td>
                        <td>
                        <form action="{{route('pues_eliminar', $item)}}" method="POST">
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
{{$pues->links()}}
@endsection
