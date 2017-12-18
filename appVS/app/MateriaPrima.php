<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MateriaPrima extends Model
{
    use SoftDeletes;
    protected $table = 'materiaPrima';
    protected $primaryKey='idmateriaPrima';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'nombre',
    	'categoria',
    	'porcentaje_pesohumedo',
    	'existencia_minima',
      'costo',
      'costo_ant',
    	'existencia_real',
      'existencia_produccion'
    ];

    public function salidas()
    {
        return $this->hasMany('appVS\Salida', 'materiaprima_id');
    }

    public function entradas()
    {
        return $this->hasMany('appVS\Entrada', 'materiaprima_id');
    }

    public function configuracionesmateriasprimas()
    {
        return $this->hasMany('appVS\ConfiguracionMateriaPrima', 'materiaprima_id');
    }

}
