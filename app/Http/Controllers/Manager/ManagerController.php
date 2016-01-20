<?php

namespace SpeedTravel\Http\Controllers\Manager;

use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.index');
    }
}
