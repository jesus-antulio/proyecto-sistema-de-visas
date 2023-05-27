<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = [
        'solicitud',
        'foto',
        'comprobante_pago',
        'identificacion',
        'p_economica',
        'p_edu_empleo',
        'id_usuario',
    ];
}
