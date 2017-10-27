<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $table = 'materiaPrima';
    protected $primaryKey='idmateriaPrima';

    protected $fillable = [
    	'nombre',
    	'categoria',
    	'porcentaje_pesohumedo',
    	'existencia_minima',
    	'existencia_real'
    ];

    public function configuracionMateriasPrimas(){
    	return $this->hasMany('appVs\Salida');
    }

    public function salidas(){
    	return $this->hasMany('appVs\ProduccionMaquina');
    }

    public function entradas(){
    	return $this->hasMany('appVs\Entrada');
    }

    public function cigarros(){
    	return $this->hasOne('appVs\Cigarro');
    }
}
