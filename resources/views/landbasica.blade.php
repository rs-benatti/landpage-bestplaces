@extends('layouts.landing')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('css/landpagebasica.css') }}" />
@endsection
@section('conteudo')
<div class="background1">
        <div class="logo-absolute">
            <img src="{{ url('/img/Logomarca - The Connection.svg') }}" class="img-logo-absolute">
        </div>
        <a href="#conteudo">
        <img src="{{ url('/img/Imagem da seta.png') }}" class="seta">
        </a>
    </div>
    <div class="container margintop100">
        <div class="row" id="conteudo">
            <div class="col-12">
                <h1 class="verdeEscuro grande inline">Baixe o App <span><img src="{{ url('/img/Ícone - Download.svg') }}" alt="" width="50px" height="50px"></span></h1>
            </div>
        </div>
        <div class="row mobile-margin-top-50">
            <div class="col-2">
                <div class="icone1">
                    <div class="divicones">
                        <img src="{{ url('/img/Imagem lpb 2.svg') }}" class="iconeSO"><br><br>
                    </div>
                    <a class="icones">Na App Store</a>
                </div>
            </div>
            <div class="col-2 mobile-marginleft80">
                <div class="icone1">
                    <div class="divicones">
                        <img src="{{ url('/img/Ícone Play Store.svg') }}" class="iconeSO1"><br><br>
                    </div>
                    <a class="icones">Na Play Store</a>
                </div>
            </div>
        </div>
        <div class="row margintop100">
            <div class="col-9">
                <h1 class="verdeEscuro">Publique seu currículo</h1><br>
                <p class="verdeEscuro light margintop-20 medio-pequeno">
                    Crie seu perfil profissional e divulgue suas competências,
                    habilidades, interesses e diferenciais.
                </p>
            </div>
        </div>
        <div class="row margintop80">
            <div class="col-9">
                <h1 class="verdeEscuro">Seja facilmente encontrado</h1><br>
                <p class="verdeEscuro light margintop-20 medio-pequeno">
                    A gama de empresas cadastradas em nossa plataforma
                    permite uma facilidade em sua contratação.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluido">
        <img class="margintop80" src="{{ url('/img/Imagem Curva branca 2.png') }}" alt="" width="100%" height="100%">
        <div class="background2 margintop-100">
            <div class="container padding-top100 padding-bottom20">
                <div class="row">
                    <div class="col-12">
                        <h1 class="verdeEscuro grande margintop-100">Sobre nós <span><img class="margintop-20" src="{{ url('/img/Ícone - Sobre nós.svg') }}" alt="" width="100px" height="100px"></span></h1>

                        <p class="verdeEscuro light medio-pequeno">
                            Somos a mais nova Start Up de Feira de Santana.
                        </p>
                        <p class="verdeEscuro light medio-pequeno">
                            Viemos para revolucionar o cenário profissional da 2ª maior cidade da
                            Bahia através de uma facilitação na comunicação dos profissionais com
                            as empresas da região. Tudo isso digitalmente.
                        </p>
                        <p class="verdeEscuro light medio-pequeno">
                            <span class="verdeEscuro medio-pequeno sublinhado">A era digital já começou,</span> por isso acreditamos
                            que todos nós precisamos evoluir, tornar nossa comunicação mais
                            fluída e, como já dissemos, encurtar distâncias.
                        </p>
                        <p class="verdeEscuro light medio-pequeno">
                            E nossa parceria não poderia ser outra:<br>
                            <span class="verdeEscuro medio-grande">A internet</span>
                        </p>
                        <p class="verdeEscuro medio-pequeno margintop-20">
                            Baixe o aplicativo e esteja preparado para novas oportunidades!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rodape">
        <div class="div-img-logo-rodape">
            <img src="{{ url('/img/Logomarca - The Connection.svg') }}" class="img-logo-absolute">
        </div>
        <div class="width100">
            <a class="icones">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Etiam eleifend purus eget ultrices pulvinar. Pellentesque vel elit tincidunt,
                porta mi non, rhoncus mauris.
            </a>
        </div>
    </div>
@endsection
