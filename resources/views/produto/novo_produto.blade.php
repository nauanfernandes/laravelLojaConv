@extends('layouts.main')
@section('card-title', 'Cadastro / Produtos')
@section('card-pag', 'Produtos')
@section('h3-tittle', 'Cadastro')
@section('content')

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Novo Produto</h3>
    </div>


    <form action="/admin/salvar_produto" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label for="fornecedor_cnpj">Fornecedor:</label>
                <select class="form-control" name="fornecedor_cnpj" id="fornecedor_cnpj">
                    @foreach ($fornecedores as $cnpj => $nome)
                    <option value="{{ $cnpj }}">{{ $nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" name="valor" id="valor">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="text" class="form-control" name="quantidade" id="quantidade">
            </div>
            <div class="form-group">
                <label for="imagem">Imagem:</label>
                <input type="text" class="form-control" name="imagem" id="imagem">
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href='/admin/produtos' class='btn btn-default'>
                Voltar
            </a>
        </div>
    </form>
</div>

@endsection