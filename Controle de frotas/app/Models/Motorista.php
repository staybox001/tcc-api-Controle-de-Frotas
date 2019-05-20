<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    public $timestamps = false;  // remove a inclusão obrigatória da inclusão da data de criacao
    
    protected $fillable = [
        'nome', 'cpf', 'telefone', 'cidade', 'endereco', 'veiculo_id'
    ];
    
    public $rules = [
        'nome'         => 'required',
        'cpf'          => 'required',    
        'telefone'     => 'required',
        'cidade'       => 'required',
        'veiculo_id'   => 'required',
        
    ];

    public function veiculo()
    {
        return $this->hasOne(veiculo::class);
    } 
}
