@extends('layouts.aplicacion')

@section('head')
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('contenido')
    <div class='container' id='container'>
        <div class='row'>
            <div class='col-7' id='container-login'>
                <h1>Iniciar Sesión</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3" id='form-login'>
                        <div class="espacio">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                   name="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico"
                                   required autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="espacio">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password"
                                   class="form-control form-control @error('password') is-invalid @enderror"
                                   id="password" name="password" placeholder="Ingrese su contraseña" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Recordarme</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
            <div class='col-1'>
                <div id='line'></div>
            </div>
            <div class='col-4'>
                <h1>¿No tienes una cuenta?</h1>
                <p>Registrate para poder acceder a todos los beneficios de la plataforma</p>
                <a href="{{route('register')}}" class="btn btn-primary">Registrarse</a>
            </div>
        </div>
    </div>
@endsection
