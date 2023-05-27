@extends('layouts.aplicacion')

@section('head')
    <title>Cuestionario</title>
    <link rel="stylesheet" href="{{asset('css/citas.css')}}">
@endsection

@section('contenido')
    <div class='banner'>
        <h1>Cuestionario</h1>
    </div>
    <div class="container">
        <h5> Para una consulta más personalizada, es necesario contestar la siguiente encuesta </h5>
        <div class="row">
            <div class="col">
                <form action="cuestionario/crear" method="post">
                    @csrf
                    @auth
                        <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">
                    @endauth
                    <label class="form-label" for="pregunta_1">Aqui va la pregunta 1</label>
                    <input name="pregunta_1" type="text" required class="form-control">
                    <label class="form-label" for="pregunta_2">Aqui va la pregunta 2</label>
                    <input name="pregunta_2" type="text" required class="form-control">
                    <label class="form-label" for="pregunta_3">Aqui va la pregunta 3</label>
                    <input name="pregunta_3" type="text" required class="form-control">
                    <label class="form-label" for="pregunta_4">Aqui va la pregunta 4</label>
                    <input name="pregunta_4" type="text" required class="form-control">
                    <label class="form-label" for="pregunta_5">Aqui va la pregunta 5</label>
                    <input name="pregunta_5" type="text" required class="form-control">

                    <div class="espacio">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
