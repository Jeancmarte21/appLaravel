<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Suplidor extends Model
{
    protected $table='suplidor';

    protected $primaryKey="idsuplidor";

    public $timestamps=false;

    protected $fillable=[
    	'nombre','telefono','correo','pais','direccion'
    ];

    protected $guarded=[];
}
