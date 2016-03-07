<?php

namespace SpeedTravel\Http\Controllers\Manager;

use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;
use SpeedTravel\Models\Cidade;
use SpeedTravel\Models\Plano;

class PlanosController extends Controller
{
    private $plano;
    private $cidade;
    private $toast;

    public function __construct(Plano $plano, Toast $toast, Cidade $cidade)
    {
        $this->plano = $plano;
        $this->cidade = $cidade;
        $this->toast = $toast;
    }

    public function index()
    {
        $data['planos'] = $this->plano->paginate(5);
        return view('manager.planos.index')->with($data);
    }

    public function create()
    {
        $data['cidades'] = $this->cidade->lists('cidade', 'id');
        return view('manager.planos.create')->with($data);
    }

    public function store(Request $request)
    {
        $this->plano->create($request->all());

        $this->toast->message('Plano ' . $this->plano->latest()->first()->nome . ' cadastrado com sucesso', 'success');

        return redirect()->route('manager.planos.index');
    }

    public function edit($id)
    {
        $data['plano'] = $this->plano->find($id);

        return view('manager.planos.edit')->with($data);
    }

    public function update($id, Request $request)
    {
        $this->plano->find($id)->update($request->all());

        $this->toast->message($this->plano->find($id)->nome . ' atualizado com sucesso', 'info');

        return redirect()->route('manager.planos.index');
    }

    public function destroy($id)
    {
        $this->toast->message($this->plano->find($id)->nome . ' excluído com sucesso', 'error');

        $this->plano->find($id)->delete();

        return redirect()->route('manager.planos.index');
    }
}
