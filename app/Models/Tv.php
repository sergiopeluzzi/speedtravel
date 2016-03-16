<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    protected $fillable = ['nome', 'descricao', 'canais', 'valorresidencial', 'valorempresarial', 'ativo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cidades()
    {
        return $this->belongsToMany('SpeedTravel\Models\Cidade', 'tvs_cidades', 'tvid', 'cidadeid');
    }
}
