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
    	'direccion',
        'pais'
    ];

    public function entradas()
    {
        return $this->hasMany('appVS/Entrada', 'suplidor_id');
    }
}
