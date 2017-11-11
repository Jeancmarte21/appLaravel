<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class ConfiguracionMateriaPrima extends Model
{
    //
    protected $table = 'configuracionMateriaPrima';
    protected $primaryKey = 'idconfiguracionmateriaprima';
    protected $fillable = [
    	'materiaprima_id',
    	'configuracion_id',
    	'cantidad',
    	'envoltura'
    ];

    public function materiasprimas()
    {
        return $this->belongsTo('appVS/MateriaPrima', 'materiaprima_id');
    }

    public function configuraciones()
    {
        return $this->belongsTo('appVS/Configuracion', 'configuracion_id');
    }
}
