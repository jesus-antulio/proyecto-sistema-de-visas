<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comprobante</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .contenedor {background-color: #FDF2E9; border: 2px solid black; padding: 20px; margin: 20px; border-radius: 20px}
        h3{font-family: 'Poppins', sans-serif; font-size: 1.5rem; font-weight: 700; text-align: center;}
        p{font-family: 'Nunito', sans-serif; font-size: 1rem; font-weight: 400; text-align: justify;}
        .information{background-color: white;padding: 20px; margin: 20px; border-radius: 20px}
    </style>
</head>
<body>
<div class="contenedor">
    <div class="banner">
        <img src="https://visascdmxs.com/wp-content/uploads/2021/02/visa_americana_visas_CDMXs-1.jpg" alt="Logo" border="0" width="100%">
    </div>
    <h3>
        Hola, {{ $contacto['nombre'] }}.
    </h3>
    <p>
        Gracias por ponerte en contacto con nosotros, escalaremos tu duda y en breve nos pondremos en
        contacto contigo.
    </p>
    <p>Aqui tienes una copia del mensaje:</p>
    <p>
        <b>Nombre:</b> {{$contacto['nombre']}}
    </p>
    <p>
        <b>Correo:</b> {{$contacto['email']}}
    </p>
    <p>
        <b>Asunto:</b> {{$contacto['asunto']}}
    </p>
    <p>
        <b>Mensaje:</b> {{$contacto['mensaje']}}
    </p>
</div>
</body>
