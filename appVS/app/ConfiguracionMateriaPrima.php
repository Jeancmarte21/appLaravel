<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class ConfiguracionMateriaPrima extends Model
{
    //
    protected $table = 'configuracionMateriaPrima';

    protected $fillable = [
    	'materiaprima_id',
    	'configuracion_id',
    	'cantidad',
    	'envoltura'
    ];
}
