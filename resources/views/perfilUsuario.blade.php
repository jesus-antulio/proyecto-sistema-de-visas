@extends('layouts.aplicacion')

@section('header')
    <title>Perfil de {{$user->nombre}}</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('contenido')
<div class="container" id='container'>
    <h1 class="text-center">Perfil de {{$user->nombre}}</h1>
    <div class='row'>
        <div class="col"><h3>Información Personal</h3></div>
        <div class="col-8">
            <div class="line"></div>
        </div>
    </div>
    <div class="row" id='row'>
        <div class="col-4">
            <label class="form-label">Nombre(s)</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                value="{{ $user->nombre }}"
                required
                autocomplete="name"
                autofocus placeholder="Nombre"
                readonly
            >
        </div>
        <div class="col-4">
            <label class="form-label">Apellido Paterno</label>
            <input id='apellido_paterno' type="text"
                   class="form-control" name="apellido_paterno"
                   value="{{ $user->apellido_paterno }}" required autocomplete="apellido_paterno" autofocus
                   placeholder="Apellido Paterno" readonly>
        </div>
        <div class="col-4">
            <label class="form-label">Apellido Materno</label>
            <input id='apellido_materno' type="text"
                   class="form-control" name="apellido_materno"
                   value="{{ $user->apellido_materno }}" required autocomplete="apellido_materno" autofocus
                   placeholder="Apellido Materno" readonly>
        </div>
    </div>
    <div class="row" id='row'>
        <div class="col-4">
            <label class="form-label">Fecha de Nacimiento</label>
            <input id='fecha_nacimiento' type="date"
                   class="form-control" name="fecha_nacimiento"
                   value="{{ $user->fecha_nacimiento }}" required autocomplete="fecha_nacimiento" autofocus
                   placeholder="Fecha de Nacimiento" readonly>
        </div>
        <div class="col-4">
            <label class="form-label"> Genero (Masculino/Femenino) </label>
            <input id='sexo' type="text" class="form-control" name="sexo"
                   value="{{ $user->sexo }}" required autocomplete="sexo" autofocus placeholder="Género" readonly>

        </div>
        <div class="col-4">
            <label class="form-label">CURP</label>
            <input id='curp' type="text" class="form-control" name="curp"
                   value="{{ $user->curp }}" required autocomplete="curp" autofocus placeholder="CURP" readonly>
        </div>
    </div>

    <!-- DIRECCIÓN -->
    <div class='row' id='row'>
        <div class="col"><h3>Dirección</h3></div>
        <div class="col-10">
            <div class="line"></div>
        </div>
    </div>
    <div class="row" id="row">
        <div class="col-4">
            <label for="" class="form-label">Calle</label>
            <input id='calle' type="text" class="form-control" name="calle"
                   value="{{ $user->calle }}" required autocomplete="calle" autofocus placeholder="Calle" readonly>
        </div>
        <div class="col-2">
            <label for="" class="form-label">Número Exterior</label>
            <input id='num_ext' type="text" class="form-control"
                   name="num_ext" value="{{ $user->num_ext }}" required autocomplete="num_ext" autofocus
                   placeholder="Número Exterior" readonly>
        </div>
        <div class="col-2">
            <label for="" class="form-label">Número Interior</label>
            <input id='num_int' type="text" class="form-control"
                   name="num_int" value="{{ $user->num_int }}" autocomplete="num_int" autofocus
                   placeholder="Número Interior" readonly>
        </div>
        <div class="col-4">
            <label for="" class="form-label">Colonia</label>
            <input id='colonia' type="text" class="form-control"
                   name="colonia" value="{{ $user->colonia }}" required autocomplete="colonia" autofocus
                   placeholder="Colonia" readonly>
        </div>
    </div>
    <div class="row" id="row">
        <div class="col-4">
            <label for="" class="form-label">Código Postal</label>
            <input id='codigo_postal' type="text"
                   class="form-control" name="codigo_postal"
                   value="{{ $user->codigo_postal }}" required autocomplete="codigo_postal" autofocus
                   placeholder="Código Postal" readonly>
        </div>
        <div class="col-4">
            <label for="" class="form-label">Estado</label>
            <input id='estado' type="text" class="form-control"
                   name="estado" value="{{ $user->estado }}" required autocomplete="estado" autofocus
                   placeholder="Estado" readonly>
        </div>
        <div class="col-4">
            <label for="" class="form-label">Municipio</label>
            <input id='municipio' type="text" class="form-control"
                   name="municipio" value="{{ $user->municipio }}" required autocomplete="municipio" autofocus
                   placeholder="Municipio" readonly>
        </div>
    </div>

    <!-- CONTACTO -->
    <div class='row' id='row'>
        <div class="col"><h3>Contacto</h3></div>
        <div class="col-10">
            <div class="line"></div>
        </div>
    </div>
    <div class="row" id="row">
        <div class="col-6">
            <label for="" class="form-label">Correo Electrónico</label>
            <input id='email' type="email" class="form-control"
                   name="email" value="{{ $user->email }}" required autocomplete="email" autofocus
                   placeholder="Correo Electrónico" readonly>
        </div>
        <div class="col-6">
            <label for="" class="form-label">Teléfono</label>
            <input id='telefono' type="text" class="form-control"
                   name="telefono" value="{{ $user->telefono }}" required autocomplete="telefono" autofocus
                   placeholder="Teléfono" readonly>
        </div>
    </div>
</div>
@endsection
