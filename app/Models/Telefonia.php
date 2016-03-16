<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Telefonia extends Model
{
    protected $fillable = ['nome', 'descricao', 'minutos', 'valorresidencial', 'valorempresarial', 'ativo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cidades()
    {
        return $this->belongsToMany('SpeedTravel\Models\Cidade', 'telefonias_cidades', 'telefoniaid', 'cidadeid');
    }
}
