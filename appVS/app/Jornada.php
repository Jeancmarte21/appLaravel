<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jornada extends Model
{
    //
    protected $table = 'Jornada';
    protected $primaryKey = 'idjornada';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'maquina_id',
    	'empleado_id',
    	'hora_extra',
        'extra',
    	'incentivo',
    	'fecha'
    ];

    public function maquinas()
    {
        return $this->belongsTo('appVS/Maquina', 'maquina_id');
    }

    public function empleados()
    {
        return $this->belongsTo('appVS/Empleado', 'empleado_id');
    }
}
