<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManutencaoController extends Controller
{
    public function index()
    {
        return view('painel.manutencao.index');
    }
}
