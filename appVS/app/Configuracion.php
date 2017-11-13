<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuracion extends Model
{
    //
    use SoftDeletes;
    protected $table = 'configuracion';
    protected $primaryKey='idconfiguracion';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'cigarro_id',
    	'nombre',
    	'fecha',
    ];

    public function produccionmaquinas()
    {
        return $this->hasMany('appVS\ProduccionMaquina', 'configuracion_id');
    }

    public function configuracionesmateriasprimas()
    {
        return $this->hasMany('appVS\ConfiguracionMateriaPrima', 'configuracion_id');
    }
}
