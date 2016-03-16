<?php

namespace SpeedTravel\Http\Controllers\Manager;

use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;
use SpeedTravel\Models\Cidade;
use SpeedTravel\Models\Internet;

class InternetsController extends Controller
{
    private $internet;
    private $cidade;
    private $toast;

    public function __construct(Internet $internet, Cidade $cidade, Toast $toast)
    {
        $this->internet = $internet;
        $this->cidade = $cidade;
        $this->toast = $toast;
    }

    public function index()
    {
        $data['internets'] = $this->internet->paginate(5);

        return view('manager.planos.internet.index')->with($data);
    }

    public function create()
    {
        $data['cidades'] = $this->cidade->lists('cidade', 'id');

        return view('manager.planos.internet.create')->with($data);
    }

    public function store(Request $request)
    {
        $this->internet->create($request->all());
        $internet = $this->internet->latest()->first();

        foreach ($request->cidades as $cidade) {
            $this->cidade->find($cidade)->internets()->attach($internet);
        }

        $this->toast->message('Plano | Internet ' . $this->internet->latest()->first()->nome . ' cadastrado com sucesso', 'success');
        return redirect()->route('manager.planos.internet.index');
    }

    public function edit($id)
    {
        $data['internet'] = $this->internet->find($id);
        $data['cidades'] = $this->cidade->lists('cidade', 'id');

        return view('manager.planos.internet.edit')->with($data);
    }

    public function update($id, Request $request)
    {
        $internet = $this->internet->find($id);
        $internet->update($request->all());

        foreach ($internet->cidades as $excluir) {
            $internet->cidades()->detach($excluir);
        }

        foreach ($request->cidades as $incluir) {
            $this->cidade->find($incluir)->internets()->attach($internet);
        }

        $this->toast->message('Plano | Internet ' . $this->internet->find($id)->nome . ' atualizado com sucesso', 'info');
        return redirect()->route('manager.planos.internet.index');
    }

    public function destroy($id)
    {
        $internet = $this->internet->find($id);
        foreach ($internet->cidades as $cidade) {
            $c = $this->cidade->find($cidade->id);
            $internet->cidades()->detach($c);
        }

        $this->toast->message('Plano | Internet ' . $this->internet->find($id)->nome . ' excluído com sucesso', 'error');
        $this->internet->find($id)->delete();

        return redirect()->route('manager.planos.internet.index');
    }
}
