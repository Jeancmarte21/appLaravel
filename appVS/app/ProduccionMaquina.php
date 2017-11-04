<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class ProduccionMaquina extends Model
{
    //
    protected $table = 'produccionMaquina';
    protected $primaryKey = 'idproduccionmaquina';
    protected $fillable = [
    	'maquina_id',
    	'cigarro_id',
    	'configuracion_id',
    	'cantidad',
    	'fecha'
    ];

    public function maquinas()
    {
        return $this->belongsTo('appVS/Maquina', 'maquina_id');
    }

    public function cigarros()
    {
        return $this->belongsTo('appVS/Cigarro', 'cigarro_id');
    }

    public function configuraciones()
    {
        return $this->belongsTo('appVS/Configuracion', 'configuracion_id');
    }

}
