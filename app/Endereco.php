<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['pais', 'estado', 'cidade', 'rua', 'numero', 'cep', 'complemento'];

}
