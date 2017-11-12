<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfiguracionMateriaPrima extends Model
{
    //
    protected $table = 'configuracionMateriaPrima';
    protected $primaryKey = 'idconfiguracionmateriaprima';
    protected $dates = ['deleted_at'];
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
