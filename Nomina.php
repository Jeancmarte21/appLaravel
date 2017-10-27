<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    protected $table='nomina';

    protected $primaryKey="idnomina";

    public $timestamps=false;

    protected $fillable=[
    	'empleado_idempleado','salario','incentivo','licencia','hora_extra','salario_bruto','seguro','prestamo_oficina','tss_pc','tss','afs','agua','prestamo_raf','descuento','neto'
    ];

    protected $guarded=[];
}
