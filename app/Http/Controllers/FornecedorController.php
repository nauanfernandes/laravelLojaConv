<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index', 'novo_fornecedor', 'salvar_novo', 'editar', 'excluir', 'salvar_alteracao', 'pesquisa');
    }
    public function index()
    {
        $fornecedor = Fornecedor::all()->toArray();

        return view('fornecedor.index',
        ['lista' => $fornecedor]
    );
    
    }
    public function indexsite()
    {
        $fornecedor = Fornecedor::all()->toArray();

        return view('fornecedores',
        ['lista' => $fornecedor]
    );
}
    public function novo_fornecedor()
    {
        return view('fornecedor.novo_fornecedor');
    }

    public function salvar_novo(Request $dados) {
            $fornecedor = new Fornecedor();
            $fornecedor->nome = $dados->input("nome");
            $fornecedor->cnpj = $dados->input("cnpj");
            $fornecedor->logradouro = $dados->input("logradouro");
            $fornecedor->numero = $dados->input("numero");
            $fornecedor->bairro = $dados->input("bairro");
            $fornecedor->cidade = $dados->input("cidade");
            $fornecedor->telefone = $dados->input("telefone");
            $fornecedor->imagem = $dados->input("imagem");
            $fornecedor->save();

            return redirect('/admin/fornecedores');
    }
     public function excluir($cnpj)
     {
          $fornecedor = Fornecedor::find($cnpj);
          $fornecedor->delete();
          return redirect('/admin/fornecedores');
     }
     public function editar($cnpj)
     {
        $fornecedor = Fornecedor::where('cnpj', $cnpj)->firstOrFail();
          return view('fornecedor.editar',
                [ 'fornecedor' => $fornecedor ]
              );
     }

    public function salvar_alteracao(Request $request) {
        $cnpj = $request->input("cnpj");

        $fornecedor = Fornecedor::where('cnpj', $cnpj)->firstOrFail();
        $fornecedor->nome          = $request->input('nome');
        $fornecedor->logradouro    = $request->input('logradouro');
        $fornecedor->numero    = $request->input('numero');
        $fornecedor->bairro    = $request->input('bairro');
        $fornecedor->cidade   = $request->input('cidade');
        $fornecedor->telefone   = $request->input('telefone');
        $fornecedor->imagem   = $request->input('imagem');
        $fornecedor->save();

        return redirect('/admin/fornecedores');
    }

    public function pesquisa(Request $request) {
        $valor = $request->input("valor");

        $fornecedor = Fornecedor::query()
                    ->where('nome','LIKE', "%{$valor}%")
                    ->get();

        return view('fornecedor.index', ['lista' => $fornecedor]);
    }

}
