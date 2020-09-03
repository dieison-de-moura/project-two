<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'idade', 'especialidade', 'sexo', 'descricao', 'ativo', 'id_abrigo',
    ];
}
