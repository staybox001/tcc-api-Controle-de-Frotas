<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Manutencao extends Model
{
    public $timestamps = false;

    public function veiculo()
    {
        return $this->hasOne(veiculo::class);
    } 
}
