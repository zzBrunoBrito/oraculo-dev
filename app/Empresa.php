<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Empresa extends Authenticatable
{
    protected $table = 'empresa';    
    public $timestamps = false;

    protected $fillable = [
            'nome', 'email', 'cnpj', 'password','telefone',
        ];

    protected $hidden = [
            'password'. 'remember_token',
        ];

    public function user(){
 	    return $this->belongsTo('App\User', 'users_id');
    }

    public function equipamento(){
        return $this->hasMany('App\Equipamento');
    }
}
