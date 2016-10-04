<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = 'profissional';
    public $timestamps = false;
    protected $fillable = ['name', 'cargo', 'dtNasc', 'telefone', 'email', 'status'];

    public function endereco(){
         return $this->hasOne('App\Endereco');
    }

    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }
}
