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
        $plano = $this->plano->latest()->first();

        foreach ($request->cidades as $cidade) {
            $this->cidade->find($cidade)->planos()->attach($plano);
        }

        $this->toast->message('Plano ' . $this->plano->latest()->first()->nome . ' cadastrado com sucesso', 'success');
        return redirect()->route('manager.planos.index');
    }

    public function edit($id)
    {
        $data['plano'] = $this->plano->find($id);
        $data['cidades'] = $this->cidade->lists('cidade', 'id');

        return view('manager.planos.edit')->with($data);
    }

    public function update($id, Request $request)
    {
        $plano = $this->plano->find($id);
        $plano->update($request->all());

        $this->toast->message($this->plano->find($id)->nome . ' atualizado com sucesso', 'info');
        return redirect()->route('manager.planos.index');
    }

    public function destroy($id)
    {
        $plano = $this->plano->find($id);
        foreach ($plano->cidades as $cidade) {
            $c = $this->cidade->find($cidade->id);
            $plano->cidades()->detach($c);
        }

        $this->toast->message($this->plano->find($id)->nome . ' excluído com sucesso', 'error');
        $this->plano->find($id)->delete();

        return redirect()->route('manager.planos.index');
    }
}
