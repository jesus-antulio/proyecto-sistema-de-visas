<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto de Agendamiento de Citas para Asesoría de Trámites de Visa

Este proyecto fue desarrollado como parte de la materia de Aplicaciones Web Interactivas en la Universidad Autónoma de San Luis Potosí. El objetivo del proyecto es crear una página web utilizando el framework Laravel para permitir a los usuarios agendar citas para recibir asesoría en trámites de visa.

## Características

- Registro de usuarios: Los usuarios pueden crear una cuenta en la página web proporcionando información básica como nombre, dirección de correo electrónico y contraseña.

- Inicio de sesión: Los usuarios registrados pueden iniciar sesión en la página utilizando su dirección de correo electrónico y contraseña.

- Agendamiento de citas: Los usuarios pueden seleccionar una fecha y hora disponibles para agendar una cita para recibir asesoría en trámites de visa. El sistema mostrará las fechas y horas disponibles y permitirá al usuario elegir la que mejor se ajuste a su horario.

- Confirmación de citas: Una vez que un usuario agenda una cita, recibirá una confirmación por correo electrónico con los detalles de la cita, incluyendo la fecha, hora y ubicación.

- Administración de citas: Los administradores del sistema tendrán acceso a un panel de administración donde podrán ver y gestionar todas las citas agendadas. Esto incluye la capacidad de cancelar citas, reprogramarlas y marcarlas como completadas.

- Notificaciones por correo electrónico: El sistema enviará recordatorios por correo electrónico a los usuarios antes de la fecha de su cita programada, asegurándose de que estén informados y preparados.

## Tecnologías utilizadas

El proyecto se desarrolló utilizando las siguientes tecnologías:

- **Laravel**: Laravel es un framework de desarrollo web de código abierto basado en PHP. Se utilizó para crear la estructura y lógica del proyecto, incluyendo la gestión de usuarios, autenticación, enrutamiento y la interacción con la base de datos.

- **MySQL**: Se utilizó MySQL como el sistema de gestión de bases de datos para almacenar la información de los usuarios y las citas agendadas.

- **HTML/CSS**: Se emplearon HTML y CSS para crear el diseño y la interfaz de usuario de la página web. Se utilizó CSS para estilizar los elementos y asegurar una experiencia visual atractiva.

- **JavaScript**: Se utilizó JavaScript para agregar interactividad a la página web, como la validación de formularios y la manipulación del DOM.

## Instalación

Si deseas instalar y ejecutar el proyecto en tu entorno local, sigue los siguientes pasos:

1. Clona el repositorio en tu máquina local o descarga el código fuente en formato ZIP.

2. Asegúrate de tener instalado PHP, Composer y MySQL en tu entorno.

3. Crea una nueva base de datos MySQL para el proyecto.

4. Copia el archivo `.env.example` y renómbralo como `.env`. Abre el archivo `.env` y actualiza la configuración de la base de datos con tus propias credenciales.

5. Abre una terminal en la carpeta del proyecto y ejecuta el siguiente comando para instalar las dependencias de Composer:
```composer install```

6. Genera una nueva clave de aplicación ejecutando el siguiente comando:
```php artisan key:generate```

7. Ejecuta las migraciones para crear las tablas de la base de datos:
```php artisan migrate```

8. Inicia el servidor de desarrollo ejecutando el siguiente comando:
```php artisan serve```

9. Accede a la página web en tu navegador utilizando la URL proporcionada por el servidor de desarrollo.

¡Listo! Ahora deberías tener el proyecto en funcionamiento en tu entorno local.

## Contribución

Si deseas contribuir a este proyecto, puedes seguir los siguientes pasos:

1. Realiza un fork de este repositorio.

2. Crea una nueva rama en tu repositorio para realizar tus cambios.

3. Realiza los cambios y mejoras en tu rama.

4. Realiza un pull request indicando las modificaciones que has realizado y la justificación de las mismas.

Agradecemos cualquier contribución para mejorar este proyecto.

## Equipo

Este proyecto fue desarrollado para la materia de Aplicaciones Web Interactivas. Los miembros del equipo son:

- Jesús Antulio Jiménez Delgado

## Licencia

Este proyecto se distribuye bajo la Licencia [MIT](https://opensource.org/licenses/MIT). Puedes consultar el archivo [LICENSE](LICENSE) para más detalles.
