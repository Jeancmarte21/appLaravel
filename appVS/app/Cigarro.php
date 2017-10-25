<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Cigarro extends Model
{
    protected $table='cigarro';

    protected $primaryKey="idcigarro";

    public $timestamps=false;

    protected $fillable=[
    	'nombre','tipo_cigarro','materiaPrima_idmateriaPrima'
    ];

    protected $guarded=[];
}
