<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cigarro extends Model
{
    use SoftDeletes;
     protected $table = 'cigarro';
    protected $primaryKey='idcigarro';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'nombre',
    	'tipo',

    ];

    public function configuraciones(){
    	return $this->hasMany('appVS\Configuracion', 'cigarro_id');
    }

  
    public function produccionmaquinas()
    {
        return $this->hasMany('appVS\ProduccionMaquina', 'cigarro_id');
    }
}
