@extends('layouts.main')
@section('card-title', 'Consulta / Produto')
@section('card-pag', 'Produtos')
@section('h3-tittle', 'Consulta')
@section('content')
<div class="form-group">
    <form method='get' action='/admin/pesquisar_produto'>
        <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        <br>
        <input type="submit" class="btn btn-warning">
    </form>
</div>

<div>
    <a href='/admin/novo_produto' class='btn btn-danger'>
        Novo
    </a>
</div>

<table class="table table-hover text-nowrap">
    <thead>
        <td>Produto</td>
        <td>Fornecedor</td>
    </thead>


    <tbody>
        <?php
        foreach ($lista as $linha) {
            echo "<tr>" .
                "<td>" . $linha['nome'] . "</td>" .
                "<td>" . $linha['nomefornecedor'] . "</td>" .
                "<td>
                        <a href='/admin/editar_produto/" . $linha['id'] . "' class='btn btn-default'>
                            <i class='fas fa-edit'> </i>
                            <span> Editar </span>
                            </span>

                        <a href='/admin/excluir_produto/" . $linha['id'] . "' class='btn btn-danger'>
                        <i class='fas fa-trash'> </i>
                        <span> Excluir </span>
                        </span>

                        </td>" .
                "</tr>";
        }
        ?>
    </tbody>
</table>
@endsection