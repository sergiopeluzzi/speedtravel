<?php

namespace SpeedTravel\Http\Controllers\Manager;

use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;

class ContatosController extends Controller
{
    public function index()
    {
        return view('manager.contatos.index');
    }
}
