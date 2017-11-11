<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $table = 'materiaPrima';
    protected $primaryKey='idmateriaPrima';

    protected $fillable = [
    	'nombre',
    	'categoria',
    	'porcentaje_pesohumedo',
    	'existencia_minima',
    	'existencia_real'
    ];

    public function configuraciones()
    {
        return $this->belongsToMany('appVS\Configuracion', 'configuracionMateriaPrima')->withPivot('cantidad', 'envoltura')->withTimestamps();
    }

    public function salidas()
    {
        return $this->hasMany('appVS/Salida', 'materiaprima_id');
    }

    public function entradas()
    {
        return $this->hasMany('appVS/Entrada', 'materiaprima_id');
    }

    public function cigarros()
    {
        return $this->hasMany('appVS/Cigarro', 'saborizante');
    }

    public function configuracionesmateriasprimas()
    {
        return $this->hasMany('appVS/ConfiguracionMateriaPrima', 'materiaprima_id');
    }

}
