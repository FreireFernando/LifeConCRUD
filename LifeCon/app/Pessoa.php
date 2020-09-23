<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'pessoa_nome',
        'pessoa_cpf',
        'pessoa_email',
        'pessoa_data_nasc',
        'pessoa_nacionalidade'
      ];
}
