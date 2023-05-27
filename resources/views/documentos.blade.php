@extends('layouts.aplicacion')

@section('head')
    <title>Documentos de {{$user->nombre}}</title>
    <link rel="stylesheet" href="{{asset('css/documentos.css')}}">
@endsection
@section('contenido')
    <div class="container">
        <div class='nombre'>
            <h3>Documentos de {{$user->nombre}} {{$user->apellido_paterno}}</h3>
        </div>
        <div class="row">
            <div class="col-3 imagenes">
                <img src="{{$img}}" alt="Imagen de Perfil">
            </div>
            <div class="col-9 overflow-auto">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Solicitud</th>
                        <th scope="col">Comprobante pago</th>
                        <th scope="col">Identificación</th>
                        <th scope="col">Prueba Económica</th>
                        <th scope="col">P. Educación o Empleo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <form method="post" action="/dashboard/citas/documentos/ver">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input type="hidden" name="nombre" value="{{$user->nombre}}">
                                        <input type="hidden" name="apellido_paterno"
                                               value="{{$user->apellido_paterno}}">
                                        <input type="hidden" name="file" value="{{$documento->solicitud}}">
                                        <button type="submit" class="btn btn-primary btn-sm">Visualizar</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <form method="post" action="/dashboard/citas/documentos/descargar">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input type="hidden" name="nombre" value="{{$user->nombre}}">
                                        <input type="hidden" name="apellido_paterno"
                                               value="{{$user->apellido_paterno}}">
                                        <input type="hidden" name="file" value="{{$documento->solicitud}}">
                                        <button type="submit" class="btn btn-secondary btn-sm"><i
                                                    class="fa-solid fa-download"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <form method="post" action="/dashboard/citas/documentos/ver">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input type="hidden" name="nombre" value="{{$user->nombre}}">
                                        <input type="hidden" name="apellido_paterno"
                                               value="{{$user->apellido_paterno}}">
                                        <input type="hidden" name="file" value="{{$documento->comprobante_pago}}">
                                        <button type="submit" class="btn btn-primary btn-sm">Visualizar</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-secondary btn-sm" role="button"><i
                                                class="fa-solid fa-download"></i></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <form method="post" action="/dashboard/citas/documentos/ver">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input type="hidden" name="nombre" value="{{$user->nombre}}">
                                        <input type="hidden" name="apellido_paterno"
                                               value="{{$user->apellido_paterno}}">
                                        <input type="hidden" name="file" value="{{$documento->identificacion}}">
                                        <button type="submit" class="btn btn-primary btn-sm">Visualizar</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-secondary btn-sm" role="button"><i
                                                class="fa-solid fa-download"></i></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <form method="post" action="/dashboard/citas/documentos/ver">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input type="hidden" name="nombre" value="{{$user->nombre}}">
                                        <input type="hidden" name="apellido_paterno"
                                               value="{{$user->apellido_paterno}}">
                                        <input type="hidden" name="file" value="{{$documento->p_economica}}">
                                        <button type="submit" class="btn btn-primary btn-sm">Visualizar</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-secondary btn-sm" role="button"><i
                                                class="fa-solid fa-download"></i></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <form method="post" action="/dashboard/citas/documentos/ver">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input type="hidden" name="nombre" value="{{$user->nombre}}">
                                        <input type="hidden" name="apellido_paterno"
                                               value="{{$user->apellido_paterno}}">
                                        <input type="hidden" name="file" value="{{$documento->p_edu_empleo}}">
                                        <button type="submit" class="btn btn-primary btn-sm">Visualizar</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-secondary btn-sm" role="button"><i
                                                class="fa-solid fa-download"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @if($file)
            <iframe class="documento" src="{{$file}}"></iframe>
        @endif
    </div>

@endsection
