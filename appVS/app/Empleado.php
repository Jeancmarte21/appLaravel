<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleado';
    protected $primaryKey='idempleado';
    protected $fillable = [
    	'cedula',
    	'nombre',
    	'apellidos',
        'telefono',
    	'fecha_nacimiento',
    	'direccion'
    ];
    
    public function maquinas()
    {
        return $this->belongsToMany('appVS\Maquina', 'jornada')->withPivot('hora_extra', 'extra', 'incentivo', 'fecha')->withTimestamps();
    }

}
