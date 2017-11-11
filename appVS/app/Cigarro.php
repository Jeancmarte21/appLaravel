<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Cigarro extends Model
{
     protected $table = 'cigarro';
    protected $primaryKey='idcigarro';

    protected $fillable = [
    	'nombre',
    	'tipo',
    	'saborizante'
    ];

    public function configuraciones(){
    	return $this->hasMany('appVs\Configuracion', 'cigarro_id');
    }

    public function materiasprimas(){
    	return $this->belongsTo('appVS\MateriaPrima', 'saborizante');
    }

    public function produccionmaquinas()
    {
        return $this->hasMany('appVS/ProduccionMaquina', 'cigarro_id');
    }
}
