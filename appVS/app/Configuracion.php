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

    public function materiasprimas()
    {
        return $this->belongsToMany('appVS\MateriaPrima', 'configuracionMateriaPrima')->withPivot('cantidad', 'envoltura')->withTimestamps();
    }

    public function produccionmaquinas()
    {
        return $this->hasMany('appVS/ProduccionMaquina', 'configuracion_id');
    }
}
