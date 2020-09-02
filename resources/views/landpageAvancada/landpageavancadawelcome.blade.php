@extends('layouts.landing-avancada')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('css/landpageavancada.css') }}" />
@endsection
@section('conteudo')

        <div class="headline">
            <div class="headline-text-container">
                <h1 class="headline-branco">UM MOMENTO.</h1>
                <h1 class="headline-branco">UMA SENSAÇÃO.</h1>
                <h1 class="headline-amarelo">UMA EXPERIÊNCIA.</h1>
            </div>
            <div class="headline-legend">
                <p>
                    Boom burguer é <span class="text-decoration-red">explosão de sabores</span> no seu paladar. Fique em casa, levamos para você.
                </p>
            </div>
            <div class="headline-button-div">
                <div href="" class="headline-button" id="fazerPedido">
                    <a href="/landpageavancada/cardapio" class="headline-button-anchor btn" role="button">
                        FAZER PEDIDO
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="a12 burguer-div">
        <div class="d-none d-md-block d-lg-block">
            <img src="{{ url('/img/Imagem 15.png') }}" alt="" class="burguer-image">
        </div>
    </div>
@endsection
