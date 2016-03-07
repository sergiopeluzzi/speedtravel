<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = ['categoria', 'nome', 'descricao', 'valor', 'ativo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cidades()
    {
        return $this->belongsToMany('SpeedTravel\Models\Cidade', 'planos_cidades', 'planoid', 'cidadeid');
    }
}
