<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable=[
        'titulo',
        'subtitulo',
        'autor',
        'edicao',
        'editora',
        'ano',
        'exemplares',
    ];

    public $timestamps=false;
}
