<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    //
    protected $table = 'configuracion';
    protected $primaryKey='idconfiguracion';

    protected $fillable = [
    	'cigarro_id',
    	'nombre',
    	'fecha',
    ];

    public function produccionmaquinas()
    {
        return $this->hasMany('appVS/ProduccionMaquina', 'configuracion_id');
    }

    public function configuracionesmateriasprimas()
    {
        return $this->hasMany('appVS/ConfiguracionMateriaPrima', 'configuracion_id');
    }
}
