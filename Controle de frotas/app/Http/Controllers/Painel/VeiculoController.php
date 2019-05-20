<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Veiculo;
use App\Models\Motorista;


class VeiculoController extends Controller
{
    
    private $veiculo;

    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;


    }
    // lista  veiculos
    public function index(Veiculo $veiculo)
    {
        $veiculos = $veiculo->all();
        return view('painel.veiculo.lista-veiculo', compact('veiculos'));
    }

   //envia para formulario
    public function create()
    {
        return view('painel.veiculo.cad-edit-veiculo', compact('veiculos'));
    }

    // pega dados do formulario e cadastra no bd
    public function store(Request $request)
    {
        // dd($request->all()); DEBUGANDO DADOS DO FORM
        $dadosFormulario = $request->all(); 

        //valida
        $this->validate($request, $this->veiculo->rules);


        // insere os dados na tabela veiculo
        $insert = $this->veiculo->create($dadosFormulario);
        if ($insert) {
            return redirect()->route('lista-veiculo.index');
        } else {
            return redirect()->route('lista-veiculo.create');
        }
    }

   
    public function show($id)
    {
        $veiculo = $this->veiculo->find($id);
        return view('painel.veiculo.detalhes' , compact('veiculo'));
    }

    //editar veiculos
    public function edit($id)
    {
         //recupera o produto pelo seu ID
         $veiculo = $this->veiculo->find($id);  

         return view('painel.veiculo.cad-edit-veiculo', compact('veiculo'));
    }

   
    public function update(Request $request, $id)
    {
        $dataForm = $request->all();
        //recupera os itens para editar
        $veiculo = $this->veiculo->find($id);
       
        //altera os itens
        $update = $veiculo->update($dataForm);

        //verifica se editou
        if($update)
            return  redirect()->route('lista-veiculo.index');
        else
            return redirect()->route('lista-veiculo.edit', $id)->with(['errors' => 'Falha ao editar']);

    }

    // deleta veiculo
    public function destroy($id)
    {
        $veiculo = $this->veiculo->find($id);
        $delete = $veiculo->delete();

        if ($delete) 
            return redirect()->route('lista-veiculo.index');
        else
            return redirect()->route('lista-veiculos.detalhes', $id)->with(['errors' => 'Falha ao deletar']);
    }

    


}

