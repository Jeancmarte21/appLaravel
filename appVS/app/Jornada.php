<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    //
    protected $table = 'Jornada';

    protected $fillable = [
    	'maquina_idmaquina',
    	'empleado_idempleado',
    	'hora_extra',
    	'incentivo',
    	'fecha',
    	'comida',
    ];

    public function maquinas(){
    	return $this->belongsTo('appVS/Maquina');
    }

        public function empleados(){
    	return $this->belongsTo('appVS/Empleado');
    }
}
