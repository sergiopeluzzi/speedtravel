<?php

namespace SpeedTravel\Http\Controllers\Site;

use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;
use SpeedTravel\Models\Cidade;
use SpeedTravel\Models\Internet;
use SpeedTravel\Models\Plano;
use SpeedTravel\Models\Telefonia;
use SpeedTravel\Models\Tv;

class SiteController extends Controller
{
    private $tv;
    private $telefonia;
    private $internet;
    private $cidade;

    public function __construct(Tv $tv, Telefonia $telefonia, Internet $internet, Cidade $cidade)
    {
        $this->cidade = $cidade;
        $this->tv = $tv;
        $this->telefonia = $telefonia;
        $this->internet = $internet;
    }

    public function index()
    {
        $data['tv'] = $this->tv->all()->random(1);
        $data['telefonia'] = $this->telefonia->all()->random(1);
        $data['internet'] = $this->internet->all()->random(1);

        return view('site.index')->with($data);
    }

    public function internet()
    {
        $data['internets'] = $this->internet->paginate(5);
        return view('site.internet.index')->with($data);
    }

    public function tv()
    {
        $data['tvs'] = $this->tv->paginate(5);
        return view('site.tv.index')->with($data);
    }

    public function telefonia()
    {
        $data['telefonias'] = $this->telefonia->paginate(5);
        return view('site.telefonia.index')->with($data);
    }
}
