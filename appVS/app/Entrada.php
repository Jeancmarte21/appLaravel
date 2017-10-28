<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    //
    protected $table = 'entrada';

    protected $fillable = [
    	'suplidor_idsuplidor',
    	'materiaPrima_idmateriaPrima',
    	'precio',
    	'cantidad',
    	'fecha'
    ];

    public function materiasprimas(){
    	return $this->belongsTo('appVS/MateriaPrima');
    }

        public function suplidores(){
    	return $this->belongsTo('appVS/Suplidor');
    }
}
