<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    //
    protected $table = 'Salida';

    protected $fillable = [
    	'materiaprima_id',
    	'cantidad'
    ];

    public function salidas()
    {
        return $this->belongsTo('appVS/MateriaPrima', 'materiaprima_id');
    }
}
