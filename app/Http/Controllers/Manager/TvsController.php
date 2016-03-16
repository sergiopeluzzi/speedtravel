<?php

namespace SpeedTravel\Http\Controllers\Manager;

use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;
use SpeedTravel\Models\Cidade;
use SpeedTravel\Models\Tv;

class TvsController extends Controller
{
    private $tv;
    private $cidade;
    private $toast;

    public function __construct(Tv $tv, Cidade $cidade, Toast $toast)
    {
        $this->tv = $tv;
        $this->cidade = $cidade;
        $this->toast = $toast;
    }

    public function index()
    {
        $data['tvs'] = $this->tv->paginate(5);

        return view('manager.planos.tv.index')->with($data);
    }

    public function create()
    {
        $data['cidades'] = $this->cidade->lists('cidade', 'id');

        return view('manager.planos.tv.create')->with($data);
    }

    public function store(Request $request)
    {
        $this->tv->create($request->all());
        $tv = $this->tv->latest()->first();

        foreach ($request->cidades as $cidade) {
            $this->cidade->find($cidade)->tvs()->attach($tv);
        }

        $this->toast->message('Plano | Tv ' . $this->tv->latest()->first()->nome . ' cadastrado com sucesso', 'success');
        return redirect()->route('manager.planos.tv.index');
    }

    public function edit($id)
    {
        $data['tv'] = $this->tv->find($id);
        $data['cidades'] = $this->cidade->lists('cidade', 'id');

        return view('manager.planos.tv.edit')->with($data);
    }

    public function update($id, Request $request)
    {
        $tv = $this->tv->find($id);
        $tv->update($request->all());

        foreach ($tv->cidades as $excluir) {
            $tv->cidades()->detach($excluir);
        }

        foreach ($request->cidades as $incluir) {
            $this->cidade->find($incluir)->tvs()->attach($tv);
        }

        $this->toast->message('Plano | Tv ' . $this->tv->find($id)->nome . ' atualizado com sucesso', 'info');
        return redirect()->route('manager.planos.tv.index');
    }

    public function destroy($id)
    {
        $tv = $this->tv->find($id);
        foreach ($tv->cidades as $cidade) {
            $c = $this->cidade->find($cidade->id);
            $tv->cidades()->detach($c);
        }

        $this->toast->message('Plano | Tv ' . $this->tv->find($id)->nome . ' excluído com sucesso', 'error');
        $this->tv->find($id)->delete();

        return redirect()->route('manager.planos.tv.index');
    }
}
