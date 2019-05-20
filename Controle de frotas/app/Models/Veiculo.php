<?php

namespace App\Models;

use App\Models\Motorista;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    
    public $timestamps = false;  // remove a inclusão obrigatória da inclusão da data de criacao
    protected $fillable = [
        	'marca',	'modelo',	'placa',	'ano',	'km_atual',	'situacao',
    ];

    public $rules = [
        'marca'     => 'required',
        'modelo'    => 'required',    
        'placa'     => 'required',
        'ano'       => 'required',
        'km_atual'  => 'required',
    ];
    public function motorista()
    {
        return $this->hasOne(Motorista::class);
    } 
}
