<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('card-title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="site/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="site/css/styles.css" rel="stylesheet" />
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">BebidasNauan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/" class="nav-link navegacao">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/sobre" class="nav-link navegacao">Quem Somos</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('fornecedores') ? 'active' : '' }}">
                        <a class="nav-link navegacao" href="/fornecedores">Nossos Fornecedores</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('contato') ? 'active' : '' }}">
                        <a class="nav-link navegacao" href="/contato">Contato</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('contato') ? 'active' : '' }}">
                        <a class="nav-link navegacao" href="/feedbacks">Feedbacks</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Bebidas Nauan</h1>
            </div>
        </div>
    </header>


    <!-- Section-->
    <!-- Section-->
    <!-- ... -->
    <!-- ... -->
    <section class="py-5">
        @yield('content')
    </section>
    <!-- ... -->

    <!-- ... -->


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="site/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            var url = window.location.pathname

            var links = $('.navegacao')

            links.map(function() {
                var item = $(this).attr('href')
                $(this).removeClass('active')
                if (url == item)
                    $(this).addClass('active')
            })
        })
    </script>
</body>

</html>