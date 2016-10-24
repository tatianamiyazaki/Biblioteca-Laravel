<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=[
        'nomeCliente',
        'telFixo',
        'telCelular',
        'rua',
        'numero',
        'complemento',
        'email',
        'cidade',
        'uf'
    ];

    public $timestamps=false;
}
