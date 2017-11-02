<?php
#MANDAME PARA DONDE ES, XD, UE ESTOY EN CLASES, PON EL ERROR
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
        //'telefono',
    	'fecha_nacimiento',
    	'direccion'
    ];
    
   // public function jornadas(){
   // 	return $this->hasMany('appVs\Jornada');
   // }
}
