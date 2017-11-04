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

    public function materiasprimas()
    {
        return $this->belongsToMany('appVS\MateriaPrima', 'entrada')->withPivot('precio', 'cantidad', 'fecha')->withTimestamps();
    }
}
