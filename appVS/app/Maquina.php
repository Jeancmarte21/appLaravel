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

    public function jornadas(){
    	return $this->hasMany('appVS/Jornada');
    }

    public function produccionMaquinas(){
    	return $this->hasMany('appVS/ProduccionMaquina');
    }
}


