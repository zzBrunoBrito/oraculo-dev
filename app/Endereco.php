<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected $fillable = ['pais', 'estado', 'cidade', 'rua', 'numero', 'cep', 'complemento'];
    public $timestamps = false;
    public function profissional(){
        return $this->belongsTo('App\Profissional');
    }

}
