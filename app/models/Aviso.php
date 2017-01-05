<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'avisos';

    protected $fillable = [
            'id_tipo_aviso',
            'titulo',
            'id_tipo_familia',
            'id_tipo_producto',
            'id_marca',
            'id_tipo_forma',
            'id_tipo_grados',
            'id_tipo_cc',
            'Descripcion',
            'stock',
            'fecha_inicio',
            'fecha_termino',
            'hora_inicio',
            'hora_termino',
    ];
}
