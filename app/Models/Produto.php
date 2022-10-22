<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_compra',
        'id_produto',
        'qtde',
        'preco'
    ];
    public function categoria(){
        return $this->belongTo(Categoria::class);
    }

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class);
    }

    public function comprasProduto(){}
}
