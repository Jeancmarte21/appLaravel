<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entrada extends Model
{
    //
    protected $table = 'entrada';
    protected $primaryKey = 'identrada';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'suplidor_id',
    	'materiaprima_id',
    	'precio',
    	'cantidad',
    	'fecha'
    ];

    public function materiasprimas()
    {
        return $this->belongsTo('appVS/MateriaPrima', 'materiaprima_id');
    }

    public function suplidores()
    {
        return $this->belongsTo('appVS/Suplidor', 'suplidor_id');
    }

}
