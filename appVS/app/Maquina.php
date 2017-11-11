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

    public function jornadas()
    {
        return $this->hasMany('appVS/Jornada', 'maquina_id');
    }

    public function produccionmaquinas()
    {
        return $this->hasMany('appVS/ProduccionMaquina', 'maquina_id');
    }

}


