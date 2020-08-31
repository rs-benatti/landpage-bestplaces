<!DOCTYPE html>
<head>
    <title>BIP - Torne seu lugar melhor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">

    @yield('styles')
    @yield('scripts')
</head>
<body class="{{ Route::currentRouteName() == 'avancada.cardapio' ? 'contato-body' : 'welcome-body'  }} ">
    <div class="a11">
        <div class="navigation">
            <div class="b11">
                <a href="/landpageavancada" class=" {{Route::currentRouteName() == 'avancada.index' ? 'nav-a-current' : 'nav-a'  }} ">
                    Home
                </a>
            </div>
            <div class="b12">
                <a href="/landpageavancada/cardapio" class="{{Route::currentRouteName() == 'avancada.cardapio' ? 'nav-a-current' : 'nav-a'}}">
                    Cardápio
                </a>
            </div>
            <div class="b13">
                <a href="/landpageavancada/blog" class="nav-a">
                    Blog
                </a>
            </div>
            <div class="b14">
                <a href="/landpageavancada/sobrenos" class="nav-a">
                    Sobre nós
                </a>
            </div>
            <div class="b15">
                <a href="/landpageavancada/contato" class="nav-a">
                    Contato
                </a>
            </div>
        </div>

        @if(Route::currentRouteName() == 'avancada.cardapio')
        </div>
        <div class="finish-buy">
        <span id="finish-price">R$ 0</span><br />
        Finalizar
    </div>
    @endif

        @yield('conteudo')
</body>

</html>

