<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Torcedores extends Model
{
    protected $table = 'torcedores';
    public $timestamps = false;

    protected $fillable = [
        'nome', 'documento', 'cep', 'endereco', 'bairro', 'cidade', 'uf', 'telefone', 'email'
    ];
}
