@extends('layouts.main')
@section('card-title', 'Cadastro / Fornecedor')
@section('card-pag', 'Fornecedores')
@section('h3-tittle', 'Cadastro')
@section('content')

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Novo Fornecedor</h3>
    </div>


    <form action="/admin/salvar_fornecedor" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>CNPJ</label>
                <input type="text" class="form-control" placeholder="CNPJ" name="cnpj">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Razão Social</label>
                <input type="text" class="form-control" placeholder="Razão Social" name="nome">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Logradouro</label>
                <input type="text" class="form-control" placeholder="Logradouro" name="logradouro">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Número</label>
                <input type="text" class="form-control" placeholder="Número" name="numero">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" placeholder="Bairro" name="bairro">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade" name="cidade">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" placeholder="Telefone" name="telefone">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Imagem</label>
                <input type="text" class="form-control" placeholder="/img/" name="imagem">
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