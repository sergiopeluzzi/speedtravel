<?php

namespace SpeedTravel\Http\Controllers\Site;

use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;
use SpeedTravel\Models\Cidade;
use SpeedTravel\Models\Plano;

class SiteController extends Controller
{
    private $plano;
    private $cidade;

    public function __construct(Plano $plano, Cidade $cidade)
    {
        $this->plano = $plano;
        $this->cidade = $cidade;
    }

    public function index()
    {
        $data['planos'] = $this->plano->paginate(3);
        return view('site.index')->with($data);
    }
}
