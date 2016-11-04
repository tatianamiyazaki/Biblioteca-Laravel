<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $fillable=[
        'codCliente',
        'codLivro'
    ];

    public $timestamps=false;
}
