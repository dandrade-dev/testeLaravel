<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    protected $fillable = [
        'nome',
        'pontuacao'
    ];
}
