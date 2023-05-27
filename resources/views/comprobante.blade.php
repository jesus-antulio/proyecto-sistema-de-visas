<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comprobante</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Poppins&display=swap" rel="stylesheet">--}}

    <style>
        .contenedor {background-color: #FDF2E9; border: 2px solid black; padding: 20px; margin: 20px; border-radius: 20px}
        .titulo {border-bottom: 1px dotted black; padding-bottom: 10px; margin-bottom: 10px}
        h1{font-family: 'Poppins', sans-serif; font-size: 3rem; font-weight: 700; text-align: center;}
        h2{font-family: 'Poppins', sans-serif; font-size: 2rem; font-weight: 700; text-align: center;}
        h3{font-family: 'Poppins', sans-serif; font-size: 1.5rem; font-weight: 700; text-align: center;}
        h4{font-family: 'Poppins', sans-serif; font-size: 1.2rem; font-weight: 700; text-align: center;}
        h5{font-family: 'Poppins', sans-serif; font-size: 1rem; font-weight: 700; text-align: center;}
        h6{font-family: 'Poppins', sans-serif; font-size: 0.8rem; font-weight: 700; text-align: center;}
        p{font-family: 'Nunito', sans-serif; font-size: 1rem; font-weight: 400; text-align: justify;}
        .information{background-color: white;padding: 20px; margin: 20px; border-radius: 20px}
    </style>
</head>
<body>
<div class="contenedor">
    <div class="titulo"> <h1>Comprobante de cita</h1> </div>
    <h3>
        En breve nos pondremos en contacto contigo para confirmar tu cita.
    </h3>
    <h5>
        Recuerda llevar tus documentos en físico y una copia de tu confirmación de cita,
        además de haber contestado el cuestionario posterior a la cita.
    </h5>
    <div class="information">
        <p>
            Aqui tienes el resumen de tu cita
        </p>
        <p>
            <strong>Nombre: </strong> {{ $user->nombre }}
        </p>
        <p>
            <strong>Correo: </strong> {{ $user->email }}
        </p>
        <p>
            <strong>Telefono: </strong> {{ $user->telefono }}
        </p>
        <p>
            <strong>Fecha: </strong> {{ $cita->fecha }}
        </p>
        <p>
            <strong>Hora: </strong> {{ $cita->hora }}
        </p>
        <p>
            <strong>Folio: </strong> {{ $cita->id }}
        </p>
    </div>
</div>
</body>
