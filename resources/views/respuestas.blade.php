@extends('layouts.aplicacion')

@section('head')
    <title>Respuestas de </title>
    <link rel="stylesheet" href="{{asset('css/documentos.css')}}">
@endsection

@section('contenido')
    <div class="container">
        <div class='nombre'>
            <h3>Respuestas de {{$user->nombre}} {{$user->apellido_paterno}}</h3>
        </div>
        <div class="respuestas">
            @for($i = 1; $i <= 5; $i++)
                <div class="mb-4">
                    <label for="pregunta_{{$i}}" class="form-label"> Pregunta {{$i}} </label>
                    <input type="text" name="pregunta_{{$i}}" value="{{$respuesta->{"pregunta_$i"} }}"
                           class="form-control" disabled>
                </div>
            @endfor
        </div>
    </div>
@endsection
