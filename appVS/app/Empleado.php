<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
    	'cedula',
    	'nombre',
    	'apellidos',
    	'fecha_nacimiento',
    	'direccion'
    ]

    public function jornadas{
    	return $this->belongsTo('appVs\Models\Jornada');
    }
}
