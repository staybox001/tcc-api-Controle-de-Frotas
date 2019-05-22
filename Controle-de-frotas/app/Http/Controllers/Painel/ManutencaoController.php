<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manutencao;
use App\Models\Veiculo;


class ManutencaoController extends Controller
{
    private $veiculo;

    public function __construct()
    {
        
    }
    public function index()
    {
        //return 'salvando manutenção do veiculo ';
    }

    
    public function create() 
    {
        
        return view('painel.manutencao.cadastra-manutencao');
    }

   
    public function store()
    {   // criar função para pegar o veiculo e adicionar manutenção para ele
        return "salvando manutenção do veiculo ";
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }


}
