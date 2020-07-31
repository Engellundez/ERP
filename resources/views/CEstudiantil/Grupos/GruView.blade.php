@extends('layouts.base')

@section('title')
Grupos
@endsection

@section('content')
<h1 class="my-3">Grupos</h1>
<a href="{{route('grupo_create')}}"><button class="btn btn-success">Agegar</button></a>

@if(session('mensaje'))
<div class="alert alert-danger my-2">{{session('mensaje')}}</div>
@endif

<div class="table-responsive my-3">
    <table class="table table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Semestre</th>
                <th>Carrera</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gru as $grupo)
            <tr>
                <th>{{$grupo->semestre}}°</th>
                <th>{{$grupo->carrera->nombre}}</th>
                <th><a href="{{route('grupo_editar', $grupo)}}"><button class="btn btn-primary btn-sm">Editar</button></a></th>
                <th><form action="{{route('grupo_eliminar', $grupo)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button></form></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $gru->links() }}
@endsection