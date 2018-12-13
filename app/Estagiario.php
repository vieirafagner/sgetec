<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
    protected $fillable =([
        'nome', 'cpf','email', 'setor', 'telefone'
    ]);
}
