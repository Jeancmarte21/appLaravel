<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProduccionMaquina extends Model
{
    //
    use SoftDeletes;
    protected $table = 'produccionMaquina';
    protected $primaryKey = 'idproduccionmaquina';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'maquina_id',
    	'cigarro_id',
    	'configuracion_id',
    	'cantidad',
        'cantidad_sobrante',
    	'fecha'
    ];

    public function maquinas()
    {
        return $this->belongsTo('appVS\Maquina', 'maquina_id');
    }

    public function cigarros()
    {
        return $this->belongsTo('appVS\Cigarro', 'cigarro_id');
    }

    public function configuraciones()
    {
        return $this->belongsTo('appVS\Configuracion', 'configuracion_id');
    }

}
