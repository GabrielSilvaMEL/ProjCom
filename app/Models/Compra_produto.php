<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra_produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome',
        'telefone',
        'logradouro',
        'cep',
        'cidade',
        'estado',
        'razao_social',
    ];
}
