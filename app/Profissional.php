<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $fillable = ['name', 'cargo', 'dtNasc', 'telefone', 'email', 'status'];

    public function endereco(){
         return $this->hasOne('oraculo\Endereco');
    }
}
