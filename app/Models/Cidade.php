<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['cidade', 'estado', 'uf', 'ativo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function internets()
    {
        return $this->belongsToMany('SpeedTravel\Models\Internet', 'internets_cidades', 'cidadeid', 'internetid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tvs()
    {
        return $this->belongsToMany('SpeedTravel\Models\Tv', 'tvs_cidades', 'cidadeid', 'tvid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function telefonias()
    {
        return $this->belongsToMany('SpeedTravel\Models\Telefonia', 'telefonias_cidades', 'cidadeid', 'telefoniaid');
    }
}
