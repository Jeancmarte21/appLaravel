<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Suplidor extends Model
{
    use SoftDeletes;
    protected $table='suplidor';
    protected $primaryKey='idsuplidor';
    protected $dates = ['deleted_at'];


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
