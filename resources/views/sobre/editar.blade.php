@extends('layouts.main')
@section('card-title', 'Alteração / Sobre')
@section('card-pag', 'Sobre')
@section('h3-tittle', 'Alteração')
@section('content')

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Alterar Sobre</h3>
    </div>

    <form action="/admin/salvar_alteracao_sobre" method="post">
        <input type="hidden" name="id" value='{{ $sobre["id"] }}' />

        <div class="card-body">
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" placeholder="Descrição" name="desc" value='{{ $sobre["desc"] }}'>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>IFRAME MAPS</label>
                <input type="text" class="form-control" placeholder="Logradouro" name="iframe" value='{{ $sobre["iframe"] }}'>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href='/admin/sobre' class='btn btn-default'>
                Voltar
            </a>
        </div>
    </form>
</div>

@endsection