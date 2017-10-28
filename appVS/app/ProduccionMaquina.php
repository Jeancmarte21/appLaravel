<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class ProduccionMaquina extends Model
{
    //
    protected $table = 'produccionMaquina';

    protected $fillable = [
    	'maquina_idmaquina',
    	'cigarro_idcigarro',
    	'configuracion_idconfiguracion',
    	'cantidad',
    	'fecha'
    ];


   
    public function maquinas(){
    	return $this->belongsTo('appVs\Maquina');
    }

    public function cigarros(){
    	return $this->belongsTo('appVs\Cigarro');
    }

    public function configuraciones(){
    	return $this->belongsTo('appVs\Configuracion');
}
}
