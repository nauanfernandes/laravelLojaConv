@extends('layouts.app')
@section('card-title', 'Home')
@section('content')
<a href="https://wa.me/SEU-NUMERO-DE-TELEFONE" class="whatsapp-button" target="_blank">
    <i class="bi bi-whatsapp"></i>
    Peça Já
</a>
<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
        foreach ($lista as $linha) {
            echo "<div class='col mb-5'>";
            echo "<div class='card h-100'>";
            echo "<img class='card-img-top' src='" . $linha['imagem'] . "' alt='...' />";
            echo "<div class='card-body p-4'>";
            echo "<div class='text-center'>";
            echo "<h5 class='fw-bolder'>" . $linha['nome'] . "</h5>";
            echo "<div class='d-flex justify-content-center small text-warning mb-2'>";
            echo "</div>";
            echo "R$" . $linha['valor'];
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
@endsection