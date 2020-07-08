@extends('layouts.base')

@section('title')
Entidades
@endsection

@section('content')
<br>
<h1>Entidades</h1>
<br>
<a href="{{ route('enti_create') }}"><button class="btn btn-success">Agregar</button></a>
<br><br>

@if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
@endif

<div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre del Entidad</th>
                <th colspan="2" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enti as $item)
                <tr>
                    <th scope="row">{{$item->nombre}}</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $enti->links() }}

@endsection
