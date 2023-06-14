@extends('layouts.main')
@section('card-title', 'Alteração / Fornecedor')
@section('card-pag', 'Fornecedores')
@section('h3-tittle', 'Alteração')
@section('content')

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Alterar Fornecedor</h3>
    </div>

    <form action="/admin/salvar_alteracao_fornecedor" method="post">
        <input type="hidden" name="cnpj" value='{{ $fornecedor["cnpj"] }}' />

        <div class="card-body">
            <div class="form-group">
                <label>Razão Social</label>
                <input type="text" class="form-control" placeholder="Razão Social" name="nome" value='{{ $fornecedor["nome"] }}'>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Logradouro</label>
                <input type="text" class="form-control" placeholder="Logradouro" name="logradouro" value='{{ $fornecedor["logradouro"] }}'>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Número</label>
                <input type="text" class="form-control" placeholder="Número" name="numero" value='{{ $fornecedor["numero"] }}'>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" placeholder="Bairro" name="bairro" value='{{ $fornecedor["bairro"] }}'>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade" name="cidade" value='{{ $fornecedor["cidade"] }}'>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" placeholder="Telefone" name="telefone" value='{{ $fornecedor["telefone"] }}'>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Imagem</label>
                <input type="text" class="form-control" placeholder="/img/" name="imagem" value='{{ $fornecedor["imagem"] }}'>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href='/admin/fornecedores' class='btn btn-default'>
                Voltar
            </a>
        </div>
    </form>
</div>

@endsection