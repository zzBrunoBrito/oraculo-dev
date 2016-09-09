<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';    
    public $timestamps = false;

    protected $fillable = [
            'nome', 'email', 'cnpj', 'password','telefone',
        ];

    protected $hidden = [
            'password'. 'remember_token',
        ];
}
