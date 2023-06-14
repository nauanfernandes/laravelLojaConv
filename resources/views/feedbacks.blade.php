@extends('layouts.app')
@section('card-title', 'Contato')
@section('content')
<div class="container">
    <form action="/salvar_feedback" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control form-control-sm" name="nome" id="nome">
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
<br>
<div class="container">
    <h2 class="section-title">Feedbacks</h2>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            foreach ($lista as $linha) {
                echo "<div class='col mb-5'>";
                echo "<div class='card h-100'>";
                echo "<p class='fw-bolder'>" . $linha['nome'] . "</p>";
                echo "<div class='card-body p-4'>";
                echo "<div class='text-center'>";
                echo "<h5 class='fw-bolder'>" . $linha['msg'] . "</h5>";
                echo "<div class='d-flex justify-content-center small text-warning mb-2'>";
                echo "</div>";

                echo "</div>";
                echo "</div>";
                echo "<div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>
@endsection