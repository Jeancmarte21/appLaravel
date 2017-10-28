<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    //
    protected $table = 'configuracion';
    protected $primaryKey='idconfiguracion';

    protected $fillable = [
    	'cigarro_idcigarro',
    	'nombre',
    	'fecha',
    ];

    public function cigarros(){
    	return $this->belongsTo('appVs\Cigarro');
    }
}
