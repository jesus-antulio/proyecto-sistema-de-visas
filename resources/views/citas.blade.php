@extends('layouts.aplicacion')

@section('head')
    <title>Citas</title>
    <link rel="stylesheet" href="{{asset('css/citas.css')}}">
@endsection

@section('contenido')
    <div class='banner'>
        <h1>Portal de citas</h1>
    </div>
    <div class="container">
        @if($cita)
            <div class="card text-center">
                <div class="card-header">
                    ¡Tu cita ya está agendada!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tu próxima cita es el <b>{{$cita->fecha}}</b> a las <b>{{$cita->hora}}</b>
                    </h5>
                    <p class="card-text">Recuerda llevar tus documentos en físico y una copia de tu confirmación de
                        cita.</p>
                    <div class="alinear">
                        <a href="/" class="btn btn-primary">Ir al inicio</a>
                        <a href="/citas/comprobante" class="btn btn-secondary">Descargar comprobante</a>
                        <form action="/citas/cancelar" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$cita->id}}">
                            <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Tramite: {{$cita->motivo}} | Tipo de visa: {{$cita->tipo_visa}}
                </div>
            </div>
        @else
            <h3> Agenda tu cita con nosotros para recibir uan asesoria personalizada </h3>
            <form method="POST" action="/crear_cita" enctype="multipart/form-data">
                @csrf
                @if(Route::has('login'))
                    @auth()
                        <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="nombre_clte" value="{{ Auth::user()->nombre }}">
                    @endauth
                @endif
                <h5>Selecciona el servicio que deseas</h5>
                <div class="row">
                    <div class="col">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" placeholder="Fecha" name="fecha" required>
                    </div>
                    <div class="col">
                        <label for="hora">Hora</label>
                        <input type="time" class="form-control" placeholder="Hora" name="hora" min="10:00" max="18:00"
                               required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="motivo">Motivo de la cita</label>
                        <select class="form-select" name="motivo" required>
                            <option selected>Selecciona una opción</option>
                            <option value="Primera vez">Primera vez</option>
                            <option value="Renovación">Renovación</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="tipo_visa">Tipo de visa</label>
                        <select class="form-select" name="tipo_visa" required>
                            <option selected>Selecciona una opción</option>
                            <option value="Turismo">Turismo</option>
                            <option value="Negocios">Negocios</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Trabajo">Trabajo</option>
                        </select>
                    </div>
                </div>
                <div class="espacio"></div>
                <h5>Documentación necesaria</h5>
                <div class="row">
                    <div class="col">
                        <label for="solicitud">Solicitud</label>
                        <input type="file" class="form-control" placeholder="Solicitud"
                               id="solicitud" name="solicitud" accept="application/pdf" required>
                    </div>
                    <div class="col">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" placeholder="Foto"
                               id="foto" name="foto" accept="image/*" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="pago">Comprobante de pago</label>
                        <input type="file" class="form-control" placeholder="Comprobante de pago"
                               id="pago" name="pago" accept="application/pdf" required>
                    </div>
                    <div class="col">
                        <label for="id">Identificación</label>
                        <input type="file" class="form-control" placeholder="Identificación"
                               id="id" name="identificacion" accept="application/pdf" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="p_economica">Prueba económica</label>
                        <input type="file" class="form-control" placeholder="Prueba económica"
                               id="p_economica" name="p_economica" accept="application/pdf" required>
                    </div>
                    <div class="col">
                        <label for="p_edu_empleo">Prueba educativa o de empleo</label>
                        <input type="file" class="form-control" placeholder="Prueba educativa/empleo"
                               id="p_edu_empleo" name="p_edu_empleo" accept="application/pdf" required>
                    </div>
                </div>

                <div class="espacio">
                    @if(Route::has('login'))
                        @auth
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                Confirmar cita
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Confirmar cita</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Recuerda que una vez confirmada tu cita,
                                            esta no se podra cambiar a menos que canceles y vuelvas a agendar una.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cerrar
                                            </button>
                                            <button type="submit" class="btn btn-primary">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{route('login')}}" class="btn btn-primary">Inicia sesión para agendar tu cita</a>
                        @endauth
                    @endif
                </div>
            </form>
        @endif
    </div>
@endsection
