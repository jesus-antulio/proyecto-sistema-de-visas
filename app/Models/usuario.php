<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'sexo',
        'curp',
        'rfc',
        'calle',
        'numero',
        'colonia',
        'codigo_postal',
        'municipio',
        'estado',
        'telefono',
        'email',
        'password',
        'tipo_usuario',
    ];

}
