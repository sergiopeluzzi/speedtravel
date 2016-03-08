<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = ['nome', 'endereco', 'telefone', 'email'];
}
