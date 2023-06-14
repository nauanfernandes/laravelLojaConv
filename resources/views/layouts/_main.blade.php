<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/estilos.css">
</head>

<body>
    <!-- Menu -->
    <div class="menu">
        <a href="#">Home</a>
        <a href="/products/onix">Categorias de produtos</a>
        <a href="/quemsomos">Sobre nós</a>
        <a href="/categorias">Categorias</a>
    </div>
    <!-- Menu -->
    <!-- Conteudo -->
    <div class="conteudo">
        @yield('content')
    </div>
    <!-- Conteudo -->


</body>

</html>