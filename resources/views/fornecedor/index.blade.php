@extends('layouts.main')
@section('card-title', 'Consulta / Fornecedor')
@section('card-pag', 'Fornecedores')
@section('h3-tittle', 'Consulta')
@section('content')
<div class="form-group">
    <form method='get' action='/admin/pesquisa_fornecedor'>
        <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        <br>
        <input type="submit" class="btn btn-warning">
    </form>
</div>

<div>
    <a href='/admin/novo_fornecedor' class='btn btn-danger'>
        Novo
    </a>
</div>

<table class="table table-hover text-nowrap">
    <thead>
        <td>CNPJ</td>
        <td>Razão Social</td>
    </thead>


    <tbody>
        <?php
        foreach ($lista as $linha) {
            echo "<tr>" .
                "<td>" . $linha['cnpj'] . "</td>" .
                "<td>" . $linha['nome'] . "</td>" .
                "<td>
                        <a href='/admin/editar_fornecedor/" . $linha['cnpj'] . "' class='btn btn-default'>
                            <i class='fas fa-edit'> </i>
                            <span> Editar </span>
                            </span>

                        <a href='/admin/excluir_fornecedor/" . $linha['cnpj'] . "' class='btn btn-danger'>
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