<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Fornecedor;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index', 'novo_produto', 'salvar_novo', 'alterar', 'excluir', 'salvar_alteracao', 'pesquisa');
    }
    
    public function index()
    {
        $produtos = Produto::join('fornecedores', 'produtos.fornecedor_cnpj', '=', 'fornecedores.cnpj')
                        ->select('produtos.*', 'fornecedores.nome as nomefornecedor')
                        ->get()->toArray();

        return view('produto.index', ['lista' => $produtos]);
    }
    public function indexsite()
    {
        $produtos = Produto::join('fornecedores', 'produtos.fornecedor_cnpj', '=', 'fornecedores.cnpj')
                        ->select('produtos.*', 'fornecedores.nome as nomefornecedor')
                        ->get()->toArray();

        return view('welcome', ['lista' => $produtos]);
    }
    public function novo_produto()
    {
        $fornecedores = Fornecedor::all()->pluck('nome', 'cnpj')->toArray();
        return view('produto.novo_produto', ['fornecedores' => $fornecedores]);
    }

    public function salvar_novo(Request $dados)
    {
        $produto = new Produto;
        $produto->nome = $dados->input("nome");
        $produto->fornecedor_cnpj = $dados->input("fornecedor_cnpj");
        $produto->valor = $dados->input("valor");
        $produto->quantidade = $dados->input("quantidade");
        $produto->imagem = $dados->input("imagem");
        $produto->save();

        return redirect('/admin/produtos');
    }

    public function alterar($id)
    {
        $produto = Produto::find($id);
        $fornecedores = Fornecedor::all()->pluck('nome', 'cnpj')->toArray();

        return view('produto.editar', ['produto' => $produto, 'fornecedores' => $fornecedores]);
    }
    public function excluir($id)
     {
          $produto = Produto::find($id);
          $produto->delete();
          return redirect('/admin/produtos');
     }

     public function salvar_alteracao(Request $dados)
     {
         $id = $dados->input("id");
         $produto = Produto::find($id);
         
         if ($produto) {
             $produto->nome = $dados->input("nome");
             $produto->fornecedor_cnpj = $dados->input("fornecedor_cnpj");
             $produto->valor = $dados->input("valor");
             $produto->quantidade = $dados->input("quantidade");
             $produto->imagem = $dados->input("imagem");
             $produto->save();
         }
         
         return redirect('/admin/produtos');
     }
     public function pesquisa(Request $request) {
        $valor = $request->input("valor");

        $produtos = Produto::query()
                    ->where('nome','LIKE', "%{$valor}%")
                    ->get();

        return view('produto.index', ['lista' => $produtos]);
    }
     
}