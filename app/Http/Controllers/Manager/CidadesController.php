<?php

namespace SpeedTravel\Http\Controllers\Manager;

use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;

use SpeedTravel\Http\Requests;
use SpeedTravel\Http\Controllers\Controller;
use SpeedTravel\Models\Cidade;

class CidadesController extends Controller
{
    private $cidade;
    private $toast;

    public function __construct(Cidade $cidade, Toast $toast)
    {
        $this->cidade = $cidade;
        $this->toast = $toast;
    }

    public function index()
    {
        $data['cidades'] = $this->cidade->paginate(5);
        return view('manager.cidades.index')->with($data);
    }

    public function create()
    {
        return view('manager.cidades.create');
    }

    public function store(Request $request)
    {
        $this->cidade->create($request->all());

        $this->toast->message('Cidade ' . $this->cidade->latest()->first()->cidade . ' cadastrada com sucesso', 'success');

        return redirect()->route('manager.cidades.index');
    }

    public function edit($id)
    {
        $data['cidade'] = $this->cidade->find($id);

        return view('manager.cidades.edit')->with($data);
    }

    public function update($id, Request $request)
    {
        $this->cidade->find($id)->update($request->all());

        $this->toast->message($this->cidade->find($id)->cidade . ' atualizado com sucesso', 'info');

        return redirect()->route('manager.cidades.index');
    }

    public function destroy($id)
    {
        $this->toast->message($this->cidade->find($id)->cidade . ' excluído com sucesso', 'error');

        $this->cidade->find($id)->delete();

        return redirect()->route('manager.cidades.index');
    }
}
