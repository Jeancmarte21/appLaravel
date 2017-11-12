<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maquina extends Model
{
    //
    use SoftDeletes;
    protected $table = 'maquina';
    protected $primaryKey = 'idmaquina';

    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'nombre',
    	'produccion'
    ];

    public function jornadas()
    {
        return $this->hasMany('appVS/Jornada', 'maquina_id');
    }

    public function produccionmaquinas()
    {
        return $this->hasMany('appVS/ProduccionMaquina', 'maquina_id');
    }

}


