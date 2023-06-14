<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('pesquisa','index');
    }
    public function index()
    {
        $form = Form::all()->toArray();

        return view(
            'formularios.index',
            ['lista' => $form]
        );
    }
    public function salvar_novo(Request $dados)
    {
        $form = new Form();
        $form->nome = $dados->input("nome");
        $form->tel = $dados->input("tel");
        $form->email = $dados->input("email");
        $form->msg = $dados->input("msg");
        $form->save();

        return redirect('/');
    }
    public function pesquisa(Request $request)
    {
        $valor = $request->input("valor");

        $form = Form::query()
            ->where('nome', 'LIKE', "%{$valor}%")
            ->get();

        return view('formularios.index', ['lista' => $form]);
    }
}
