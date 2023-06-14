@extends('layouts.app')
@section('card-title', 'Contato')
@section('content')
<div class="container">
<form action="/salvar_form" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control form-control-sm" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label for="nome">Telefone:</label>
                <input type="text" class="form-control form-control-sm" name="tel" id="tel">
            </div>
            <div class="form-group">
                <label for="nome">E-mail:</label>
                <input type="text" class="form-control form-control-sm" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="valor">Mensagem:</label>
                <textarea class="form-control form-control-lg" name="msg" id="msg" rows="5"></textarea>
            </div>
        </div>
        <br>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection
