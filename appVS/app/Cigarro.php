<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Cigarro extends Model
{
     protected $table = 'cigarro';
    protected $primaryKey='idcigarro';

    protected $fillable = [
    	'nombre',
    	'tipo_cigarro',
    	'materiaPrima_idmateriaPrima'
    ];

    public function configuraciones(){
    	return $this->hasMany('appVs\Configuracion');
    }

    public function produccionMaquinas(){
    	return $this->hasMany('appVs\ProduccionMaquina');
    }

    public function materiasPrimas(){
    	return $this->belongsToMany('appVs\MateriasPrimas');
    }
}
