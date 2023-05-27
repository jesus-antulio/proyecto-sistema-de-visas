@extends('layouts.aplicacion')

@section('head')
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
@section('contenido')
    <div class='banner'>
        <h1>Dashboard</h1>
    </div>
    <div class="container">
        @auth
            <h4>Bienvenido, {{Auth::user()->nombre}}</h4>
        @endauth
        <div class="row">
            <div class="col" id="overflow">
                <p>Aquí estan tus próximas citas</p>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Cita</th>
                        <th scope="col">Cuestionario</th>
                        <th scope="col">Documentos</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($citas as $cita)
                        @if($cita->status == 'pendiente')
                            <tr>
                                <td>{{$user[($cita->id_usuario)-1]->nombre}}</td>
                                <td>{{$user[($cita->id_usuario)-1]->apellido_paterno}} {{$user[($cita->id_usuario)-1]->apellido_materno}}</td>
                                <td>{{$cita->fecha}} | {{$cita->hora}}</td>
                                <td>
                                    <a href="/dashboard/citas/respuestas/{{$user[($cita->id_usuario)-1]->id}}">Ver</a>
                                </td>
                                <td>
                                    <a href="/dashboard/citas/documentos/{{$user[($cita->id_usuario)-1]->id}}">Ver</a>
                                </td>
                                <td>
                                    <div class="alinear">
                                        <form action="/dashboard/citas/terminado" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$cita->id}}">
                                            <button type="submit" class="btn btn-success btn-sm"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </form>
                                        <form action="/dashboard/citas/cancelar" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$cita->id}}">
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                        <form action="/dashboard/citas/perfil" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$user[($cita->id_usuario)-1]->id}}">
                                            <button type="submit" class="btn btn-dark btn-sm"><i
                                                    class="fa-solid fa-user"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <div class="card" aria-hidden="true">
                    <div class="card-body">
                        <h5 class="card-title placeholder-glow">
                            <span class="col">Acciones</span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="col-6">Descargar citas del sistema</span> <a href="/citas/exportar"
                                                                                      class="btn btn-primary col btn-sm">
                                <i class="fa-solid fa-download"></i></a>
                            <br>
                            <span class="col-6">Descargar usuarios del sistema</span> <a href="/usuarios/exportar"
                                                                                         class="btn btn-primary col btn-sm">
                                <i class="fa-solid fa-download"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
