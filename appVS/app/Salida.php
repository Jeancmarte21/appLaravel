<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    //
    protected $table = 'Salida';
    protected $primaryKey = 'idsalida';
    protected $fillable = [
    	'materiaprima_id',
    	'cantidad'
        'fecha'
    ];

    public function materiasprimas()
    {
        return $this->belongsTo('appVS/MateriaPrima', 'materiaprima_id');
    }
}
