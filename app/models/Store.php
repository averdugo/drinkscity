<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'tienda';

    protected $fillable = [
            'user_id',
            'id_tipo_tienda',
            'tienda_Nombre',
            'tienda_rut',
            'tienda_fono',
            'tienda_correo',
            'desde',
            'hasta',
            'tienda_direccion',
            'region_id',
            'comuna_id',
            'Repres_nombre',
            'Repres_rut',
            'Repres_Fono',
            'Repres_email'
    ];
}
