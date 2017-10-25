<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
     protected $table='empleado';

    protected $primaryKey="idempleado";

    public $timestamps=false;

    protected $fillable=[
    	'cedula','nombre','apellidos','fecha_naci','direccion'
    ];

    protected $guarded=[];
}
