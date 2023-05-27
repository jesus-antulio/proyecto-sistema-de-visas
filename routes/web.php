<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Citas;
use \App\Mail\ContactoMailable;
use \Illuminate\Support\Facades\Mail;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/contacto', 'contacto')->name('contacto');
    Route::get('/dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])->name('dashboard');;
    Route::get('/dashboard/citas/documentos/{id}', 'documentos');
    Route::get('/dashboard/citas/respuestas/{id}', 'respuestas');
    Route::post('/dashboard/citas/documentos/ver', 'ver');
    Route::post('/dashboard/citas/documentos/descargar', 'descargar');
    Route::post('/dashboard/citas/perfil', 'verPerfil');

    /* Laravel Excel */
    Route::get('/usuarios/exportar', 'exportUsers');
    Route::get('/citas/exportar', 'exportCitas');

    /* Correo Electrónico */
    Route::post('/contacto/enviar', 'enviarCorreo');
});

Route::controller(Citas::class)->group(function () {
    Route::get('/citas', 'citas');
    Route::post('/crear_cita', 'crearCita');
    Route::get('/citas/cuestionario', 'cuestionario');
    Route::post('/citas/cuestionario/crear', 'crearCuestionario');
    Route::get('/citas/cuestionario/confirmacion', 'citas');
    Route::post('/dashboard/citas/terminado', 'terminarCita');
    Route::post('/dashboard/citas/cancelar', 'cancelarCita');
    Route::post('/citas/cancelar', 'cancelarCita');
    Route::get('/citas/comprobante', 'comprobante');
    Route::get('/comprobante', 'comprobante');
});

Route::get('/welcome', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
