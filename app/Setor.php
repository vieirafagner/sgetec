<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable=([
        'nome', 'c_horaria','n_vagas'
    ]);
}
