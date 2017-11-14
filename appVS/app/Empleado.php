<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    //
    use SoftDeletes;
    protected $table = 'empleado';
    protected $primaryKey='idempleado';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'cedula',
    	'nombre',
    	'apellidos',
        'telefono',
    	'fecha_nacimiento',
    	'direccion'
    ];

    public function jornadas()
    {
        return $this->hasMany('appVS\Jornada', 'empleado_id');
    }

}
