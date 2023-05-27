@extends('layouts.aplicacion')

@section('head')
    <title>Contacto</title>
    <link rel="stylesheet" href="{{asset('css/contacto.css')}}">
    <script src="{{asset('js/contacto.js')}}"></script>
@endsection

@section('contenido')
    <div class='banner'>
        <div><h1>Contacto</h1></div>
    </div>
    <div class="container">
        @if(session('info'))
            <div class="alert alert-success" role="alert" style="text-align: center">
                ¡Mensaje enviado!
            </div>
        @endif
        <div class="row">
            <div class="col-7">
                <h5> ¿Tienes alguna duda? dejanos un mensaje y nos pondremos en contacto lo más pronto posible </h5>
                <form method="post" action="/contacto/enviar"{{--"{{ route('/contacto/enviar') }}"--}} >
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                               placeholder="Ingrese su nombre" required>

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                               placeholder="Ingrese su correo electrónico" required>

                    </div>
                    <div class="mb-3">
                        <label for="asunto" class="form-label">Asunto</label>
                        <input type="text" class="form-control" id="asunto" name="asunto"
                               placeholder="Ingrese el asunto" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="3"
                                  placeholder="Ingrese su mensaje" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-1">
                <div class='line'></div>
            </div>
            <div class="col-4">
                <h5> Tambien puedes comunicarte con nosotros a través de whatsapp </h5>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensajeWhatsapp" name="mensaje" rows="3"
                              placeholder="Ingrese su mensaje" required></textarea>
                </div>
                <button class="btn btn-primary btn-success" onclick="mensajeWhastapp()"><i
                        class="fa-brands fa-whatsapp"></i> Enviar WhatsApp
                </button>
            </div>
        </div>
    </div>
@endsection
