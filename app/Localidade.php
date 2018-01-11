<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Localidade extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email','telefone','celular','nascimento','cep','endereco',
        'bairro','cidade','uf'
    ];
}
