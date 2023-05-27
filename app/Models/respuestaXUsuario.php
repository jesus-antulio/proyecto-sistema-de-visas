<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respuestaXUsuario extends Model
{
    use HasFactory;

    protected $table = 'respuestas_x_usuarios';
    protected $fillable = [
        'id_cuestionario',
        'id_usuario',
    ];
}
