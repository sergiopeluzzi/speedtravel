<?php

namespace SpeedTravel\Http\Controllers\Manager;

use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;
use SpeedTravel\Models\Cidade;
use SpeedTravel\Models\Telefonia;

class TelefoniasController extends Controller
{
    private $telefonia;
    private $cidade;
    private $toast;

    public function __construct(Telefonia $telefonia, Cidade $cidade, Toast $toast)
    {
        $this->telefonia = $telefonia;
        $this->cidade = $cidade;
        $this->toast = $toast;
    }

    public function index()
    {
        $data['telefonias'] = $this->telefonia->paginate(5);

        return view('manager.planos.telefonia.index')->with($data);
    }

    public function create()
    {
        $data['cidades'] = $this->cidade->lists('cidade', 'id');

        return view('manager.planos.telefonia.create')->with($data);
    }

    public function store(Request $request)
    {
        $this->telefonia->create($request->all());
        $telefonia = $this->telefonia->latest()->first();

        foreach ($request->cidades as $cidade) {
            $this->cidade->find($cidade)->telefonias()->attach($telefonia);
        }

        $this->toast->message('Plano | Telefonia ' . $this->telefonia->latest()->first()->nome . ' cadastrado com sucesso', 'success');
        return redirect()->route('manager.planos.telefonia.index');
    }

    public function edit($id)
    {
        $data['telefonia'] = $this->telefonia->find($id);
        $data['cidades'] = $this->cidade->lists('cidade', 'id');

        return view('manager.planos.telefonia.edit')->with($data);
    }

    public function update($id, Request $request)
    {
        $telefonia = $this->telefonia->find($id);
        $telefonia->update($request->all());

        foreach ($telefonia->cidades as $excluir) {
            $telefonia->cidades()->detach($excluir);
        }

        foreach ($request->cidades as $incluir) {
            $this->cidade->find($incluir)->telefonias()->attach($telefonia);
        }

        $this->toast->message('Plano | Telefonia ' . $this->telefonia->find($id)->nome . ' atualizado com sucesso', 'info');
        return redirect()->route('manager.planos.telefonia.index');
    }

    public function destroy($id)
    {
        $telefonia = $this->telefonia->find($id);
        foreach ($telefonia->cidades as $cidade) {
            $c = $this->cidade->find($cidade->id);
            $telefonia->cidades()->detach($c);
        }

        $this->toast->message('Plano | Telefonia ' . $this->telefonia->find($id)->nome . ' excluído com sucesso', 'error');
        $this->telefonia->find($id)->delete();

        return redirect()->route('manager.planos.telefonia.index');
    }
}
