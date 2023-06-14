@extends('layouts.main')
@section('card-title', 'Consulta / Formulário')
@section('card-pag', 'Formulário')
@section('h3-tittle', 'Consulta')
@section('content')
<div class="form-group">
    <form method='get' action='/admin/pesquisa_formulario'>
        <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        <br>
        <input type="submit" class="btn btn-warning">
    </form>
</div>

<table class="table table-hover text-nowrap">
    <thead>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Email</td>
        <td>Mensagem</td>
    </thead>


    <tbody>
        <?php
        foreach ($lista as $linha) {
            echo "<tr>" .
                "<td>" . $linha['nome'] . "</td>" .
                "<td>" . $linha['tel'] . "</td>" .
                "<td>" . $linha['email'] . "</td>" .
                "<td>" . $linha['msg'] . "</td>" .
                "</tr>";
        }
        ?>
    </tbody>
</table>
@endsection