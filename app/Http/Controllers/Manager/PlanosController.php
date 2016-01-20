<?php

namespace SpeedTravel\Http\Controllers\Manager;

use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;
use SpeedTravel\Models\Plano;

class PlanosController extends Controller
{
    private $plano;
    private $toast;

    public function __construct(Plano $plano, Toast $toast)
    {
        $this->plano = $plano;
        $this->toast = $toast;
    }

    public function index()
    {
        return 'oi';
    }
}
