<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['cidade', 'estado', 'uf', 'ativo'];
}
