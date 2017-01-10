<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'avisos';

    protected $fillable = [
            'id_tipo_aviso',
            'titulo',
            'categoria',
            'tipo_categoria',
            'descripcion',
            'precio',
            'stock',
            'rango_fecha',
            'hora_inicio',
            'hora_termino',
    ];
}
