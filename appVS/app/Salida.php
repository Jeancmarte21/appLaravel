<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salida extends Model
{
    //
    protected $table = 'Salida';
    protected $primaryKey = 'idsalida';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'materiaprima_id',
    	'cantidad',
        'fecha'
    ];
    public function materiasprimas()
    {
        return $this->belongsTo('appVS/MateriaPrima', 'materiaprima_id');
    }
}
