<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    public function home(){
        $produtos = Produto::orderBy("nome")->get();
        return view('site.home',compact('produtos'));
    }

    public function detalhe($id){
        $produto = Produto::findOrFail($id);
        return view("site.produto",compact('produto'));
    }
}
