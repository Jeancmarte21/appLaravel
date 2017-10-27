<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Suplidor extends Model
{

    protected $table='suplidor';
    protected $primaryKey='idsuplidor';


    protected $fillable=[
    	'nombre',
    	'telefono',
    	'correo',
    	'pais',
    	'direccion'
    ];


    	 public function entradas(){
    	return $this->hasMany('appVs\Entrada');
    }
}
