<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cep extends Model
{
    protected $fillable = [
        "endereco",
        "numero_cep",
        "bairro",
        "cidade",
        "estado"
    ];
}
