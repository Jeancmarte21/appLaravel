<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    //
    protected $table = 'maquina';
    protected $primaryKey = 'idmaquina';

    protected $fillable = [
    	'nombre',
    	'produccion'
    ];

    public function empleados()
    {
        return $this->belongsToMany('appVS\Empleado', 'jornada')->withPivot('hora_extra', 'extra', 'incentivo', 'fecha')->withTimestamps();
    }

    public function produccionmaquinas()
    {
        return $this->hasMany('appVS/ProduccionMaquina', 'maquina_id');
    }

}


