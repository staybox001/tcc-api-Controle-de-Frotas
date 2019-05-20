<?php

namespace App\Http\Controllers\Painel;

use App\Models\Veiculo;
use App\Models\Motorista;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MotoristaController extends Controller
{
    private $motorista;
    private $veiculo;

    public function __construct(Motorista $motorista, Veiculo $veiculo)
    {
        $this->motorista = $motorista;
    }

    public function index(Motorista $motorista)
    {
        $motoristas = $motorista->all();

        return view('painel.motorista.lista-motorista', compact('motoristas'));
    }

    public function create(Veiculo $veiculo)
    {
        $veiculos = $veiculo->all();
        return view('/painel/motorista/cad-edit-motorista', compact('veiculos'));
    }

    public function store(Request $request)
    {

        $dadosFormulario = $request->all();

        //valida
        $this->validate($request, $this->motorista->rules);


        // insere os dados na tabela veiculo
        $insert = $this->motorista->create($dadosFormulario);
        if ($insert) {
            return redirect()->route('lista-motorista.index');
        } else {
            return redirect()->route('lista-motorista.create');
        }
    }

    public function show($id)
    {
        $motorista = $this->motorista->find($id);
        // pega somente o ID da chave estrangeira
        $veiculo_id = $motorista->veiculo_id;
        // recupera todos os dados do veículo passando o ID da chave estrangeira por parametro
        $veiculo_atual = Veiculo::find($veiculo_id);


        return view('painel.motorista.detalhes', compact('motorista', 'veiculo_atual'));
    }

    public function edit(Veiculo $veiculo, $id)
    {

        $veiculos = $veiculo->all();
        $motorista = $this->motorista->find($id);

        return view('painel.motorista.cad-edit-motorista', compact('veiculos', 'motorista'));
    }

    public function update(Request $request, $id)
    {
        $dataForm = $request->all();
        //recupera os itens para editar
        $motorista = $this->motorista->find($id);

        //altera os itens
        $update = $motorista->update($dataForm);

        //verifica se editou
        if ($update)
            return  redirect()->route('lista-motorista.index');
        else
            return redirect()->route('list-edit-motorista.edit', $id)->with(['errors' => 'Falha ao editar']);
    }

    public function destroy($id)
    {
        $motorista = $this->motorista->find($id);
        $delete = $motorista->delete();

        if ($delete)
            return redirect()->route('lista-motorista.index');
        else
            return redirect()->route('lista-motorista.detalhes', $id)->with(['errors' => 'Falha ao deletar']);
    }
    public function teste()
    { }
}
