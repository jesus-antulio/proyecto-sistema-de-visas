<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cita extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'citas';
    protected $fillable = [
        'fecha',
        'hora',
        'motivo',
        'tipo_visa',
        'id_usuario',
        'nombre_clte',
        'status',
    ];
}
