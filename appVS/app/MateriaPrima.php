<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $table='materiaPrima';

    protected $primaryKey="idmateriaPrima";

    public $timestamps=false;

    protected $fillable=[
    	'nombre','categoria','porcentaje_pesohumedo','existencia_minima','existencia_real'
    ];

    protected $guarded=[];
}
