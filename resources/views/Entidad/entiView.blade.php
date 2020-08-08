@extends('layouts.base')

@section('title')
Entidades
@endsection

@section('content')
<h1 class="my-4">Entidades</h1>
@role('super-usuario|admin')
    <a class="my-4" href="{{ route('enti_create') }}"><button class="btn btn-success">Agregar</button></a>
@endrole

@if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
@endif

<div class="table-responsive my-4">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre del Entidad</th>
                @role('super-usuario|admin')
                    <th colspan="2" scope="col">Acciones</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach($enti as $item)
                <tr>
                    <th scope="row">{{$item->nombre}}</th>
                    @role('super-usuario|admin')
                        <td>
                            <a href="{{route('enti_editar', $item)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                        </td>
                        <td>
                        <form action="{{route('enti_eliminar', $item)}}" method="POST">
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
{{ $enti->links() }}

@endsection
