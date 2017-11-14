<?php

namespace appVS;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
    	'name'
    ];

    /*public function users()
	{
    	return $this
        ->belongsToMany('AppVS\User')
        ->withTimestamps();
	}*/

	public function users(){
		return $this->hasMany('AppVS\User');
    }
}
