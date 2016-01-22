<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = ['categoria', 'nome', 'descricao', 'valor', 'ativo'];
}