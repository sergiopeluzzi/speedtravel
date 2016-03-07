<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['cidade', 'estado', 'uf', 'ativo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function planos()
    {
        return $this->belongsToMany('SpeedTravel\Models\Plano', 'planos_cidades', 'cidadeid', 'planoid');
    }
}
