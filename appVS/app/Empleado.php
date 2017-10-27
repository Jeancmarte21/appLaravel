<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $primaryKey="idempleado";

    protected $fillable = [
    	'cedula',
    	'nombre',
    	'apellidos',
    	'fecha_nacimiento',
    	'direccion'
    ];



    public function jornadas(){
    	return $this->hasMany('appVs\Jornada');
    }
}
