<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContadorDeVistas extends Model
{
    use HasFactory;

    protected $table = 'contador_de_vistas';

    protected $fillable = [
        'url',
        //'fyh_creacion',
        'visitas',
    ];

    public $timestamps = false; // Deshabilitar timestamps
}
