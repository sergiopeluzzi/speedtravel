<?php

namespace SpeedTravel\Models;

use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    protected $fillable = ['nome', 'descricao', 'download', 'upload', 'valorresidencial', 'valorempresarial', 'ativo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cidades()
    {
        return $this->belongsToMany('SpeedTravel\Models\Cidade', 'internets_cidades', 'internetid', 'cidadeid');
    }
}
