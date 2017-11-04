<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    //
    protected $table = 'Jornada';

    protected $fillable = [
    	'maquina_id',
    	'empleado_id',
    	'hora_extra',
        'extra',
    	'incentivo',
    	'fecha'
    ];

}
