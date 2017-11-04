<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    //
    protected $table = 'entrada';

    protected $fillable = [
    	'suplidor_id',
    	'materiaprima_id',
    	'precio',
    	'cantidad',
    	'fecha'
    ];

}
