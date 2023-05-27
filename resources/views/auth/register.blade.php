@extends('layouts.aplicacion')

@section('head')
    <title>Registro de nuevo usuario</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('contenido')
    <div class='container' id='container'>
        <h1 class='text-center'>Registrarse</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- INFORMACION PERSONAL -->
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
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autocomplete="name"
                            autofocus placeholder="Nombre"
                    >
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-4">
                    <label class="form-label">Apellido Paterno</label>
                    <input id='apellido_paterno' type="text"
                           class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno"
                           value="{{ old('apellido_paterno') }}" required autocomplete="apellido_paterno" autofocus
                           placeholder="Apellido Paterno">
                    @error('apellido_paterno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-4">
                    <label class="form-label">Apellido Materno</label>
                    <input id='apellido_materno' type="text"
                           class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno"
                           value="{{ old('apellido_materno') }}" required autocomplete="apellido_materno" autofocus
                           placeholder="Apellido Materno">
                    @error('apellido_materno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row" id='row'>
                <div class="col-4">
                    <label class="form-label">Fecha de Nacimiento</label>
                    <input id='fecha_nacimiento' type="date"
                           class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento"
                           value="{{ old('fecha_nacimiento') }}" required autocomplete="fecha_nacimiento" autofocus
                           placeholder="Fecha de Nacimiento">
                    @error('fecha_nacimiento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-4">
                    <label class="form-label"> Genero (Masculino/Femenino) </label>
                    <input id='sexo' type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo"
                           value="{{ old('sexo') }}" required autocomplete="sexo" autofocus placeholder="Género">
                    @error('sexo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-4">
                    <label class="form-label">CURP</label>
                    <input id='curp' type="text" class="form-control @error('curp') is-invalid @enderror" name="curp"
                           value="{{ old('curp') }}" required autocomplete="curp" autofocus placeholder="CURP">
                    @error('curp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
                    <input id='calle' type="text" class="form-control @error('calle') is-invalid @enderror" name="calle"
                           value="{{ old('calle') }}" required autocomplete="calle" autofocus placeholder="Calle">
                    @error('calle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-2">
                    <label for="" class="form-label">Número Exterior</label>
                    <input id='num_ext' type="text" class="form-control @error('num_ext') is-invalid @enderror"
                           name="num_ext" value="{{ old('num_ext') }}" required autocomplete="num_ext" autofocus
                           placeholder="Número Exterior">
                    @error('num_ext')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-2">
                    <label for="" class="form-label">Número Interior</label>
                    <input id='num_int' type="text" class="form-control @error('num_int') is-invalid @enderror"
                           name="num_int" value="{{ old('num_int') }}" autocomplete="num_int" autofocus
                           placeholder="Número Interior">
                    @error('num_int')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Colonia</label>
                    <input id='colonia' type="text" class="form-control @error('colonia') is-invalid @enderror"
                           name="colonia" value="{{ old('colonia') }}" required autocomplete="colonia" autofocus
                           placeholder="Colonia">
                    @error('colonia')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row" id="row">
                <div class="col-4">
                    <label for="" class="form-label">Código Postal</label>
                    <input id='codigo_postal' type="text"
                           class="form-control @error('codigo_postal') is-invalid @enderror" name="codigo_postal"
                           value="{{ old('codigo_postal') }}" required autocomplete="codigo_postal" autofocus
                           placeholder="Código Postal">
                    @error('codigo_postal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Estado</label>
                    <input id='estado' type="text" class="form-control @error('estado') is-invalid @enderror"
                           name="estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus
                           placeholder="Estado">
                    @error('estado')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Municipio</label>
                    <input id='municipio' type="text" class="form-control @error('municipio') is-invalid @enderror"
                           name="municipio" value="{{ old('municipio') }}" required autocomplete="municipio" autofocus
                           placeholder="Municipio">
                    @error('municipio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
                    <input id='email' type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                           placeholder="Correo Electrónico">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Teléfono</label>
                    <input id='telefono' type="text" class="form-control @error('telefono') is-invalid @enderror"
                           name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus
                           placeholder="Teléfono">
                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row" id="row">
                <div class="col-6">
                    <label class="form-label">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password" placeholder="Contraseña">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Confirmar Contraseña</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"
                           required autocomplete="new-password" placeholder="Confirmar Contraseña">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="button">
                <button type="submit" class="btn btn-primary" value='submit'>Registrar</button>
            </div>
        </form>
    </div>
@endsection
