@extends('layouts.main')
@extends('layouts.main')
@section('card-title', 'Alteração / Produto')
@section('card-pag', 'Produtos')
@section('h3-tittle', 'Alteração')
@section('content')

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Alterar Produto</h3>
    </div>


    <form action="/admin/salvar_alteracao_produto" method="post">
        <input type="hidden" name="id" value='{{ $produto["id"] }}' />
        <div class="card-body">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" value='{{ $produto["nome"] }}'>
            </div>
            <div class="form-group">
                <label for="estado_id">Fornecedor</label>
                <select class="form-control" name="fornecedor_cnpj" id="fornecedor_cnpj">
                    @foreach ($fornecedores as $cnpj => $nome)
                    <option value="{{ $cnpj }}" {{ $cnpj == $produto['fornecedor_cnpj'] ? 'selected' : '' }}>{{ $nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input type="text" class="form-control" name="valor" value='{{ $produto["valor"] }}'>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="text" class="form-control" name="quantidade" value='{{ $produto["quantidade"] }}'>
            </div>
            <div class="form-group">
                <label>Imagem</label>
                <input type="text" class="form-control" name="imagem" value='{{ $produto["imagem"] }}'>
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