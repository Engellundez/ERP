@extends('layouts.error')

@section('title')
403
@endsection

@section('content')

<div class="d-flex align-content-center flex-wrap flex-row" style="height: 500px;">
    <div class="d-flex flex-row">
        <img src="../../imagenes/alto.png" alt="Alto" style="height:370px;">
    </div>
    <div class="d-flex align-content-center flex-wrap flex-row-reverse mx-5">
        <div>
            <p style="font-size: 600%; color: #FFF;">Error 403</p>
            <p style="font-size: 250%; color: #FFF;">No tienes permiso para estar aqui.</p>
            <br>
            <a href="{{route('inicio')}}" style="font-size: 200%; color: #FFF;">Regresar al Inicio</a>
        </div>
    </div>
</div>
@endsection