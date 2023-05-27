<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuestionario extends Model
{
    use HasFactory;

    protected $table = 'cuestionarios';
    protected $fillable = [
        'pregunta_1',
        'pregunta_2',
        'pregunta_3',
        'pregunta_4',
        'pregunta_5',
    ];
}
