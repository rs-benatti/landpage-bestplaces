@extends('layouts.landing-avancada')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('css/landpagecardapio.css') }}" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&display=swap" rel="stylesheet">

@endsection
@section('scripts')
<script src="{{asset('js/lp-avancada.js')}}"></script>
@endsection
@section('conteudo')
<div class="a21">
        <div class="burguer">
            BURGUER
        </div>
        <div class="menu">
            <div class="c11">
                <div class="c111">
                    <img src="{{ url('/img/Imagem 20.png') }}" alt="" class="img-menu-card">
                </div>
                <div class="c112">
                    <div class="c112-title">
                        Guloso Burguer
                    </div>
                    <div class="c112-price">
                        R$ 21
                    </div>
                    <div class="c112-body">
                        Hambúguer bovino de 160g,
                        pão batata, queijo prato, cebola
                        caramelizada, ovo e maionese
                        especial.
                    </div>
                    <div class="c112-check">
                        <input type="checkbox" class="check" name="first-burguer" value="21" onclick="myFunction()" id="guloso-check">
                    </div>
                </div>
            </div>
            <div class="c12">
                <div class="c121">
                    <img src="{{ url('/img/Imagem 21.png') }}" alt="" class="img-menu-card">
                </div>
                <div class="c122">
                    <div class="c122-title">
                        Valente Burguer
                    </div>
                    <div class="c122-price">
                        R$ 25
                    </div>
                    <div class="c122-body">
                        Hambúrguer bovino de 320g,
                        pão de hambúrguer, queijo
                        Cheddar, bacon, batata crispy,
                        tomate, alface e Picles..
                    </div>
                    <div class="c122-check">
                        <input type="checkbox" class="check" name="first-burguer" value="25" id="guloso-check" onclick="myFunction()">
                    </div>
                </div>
            </div>
            <div class="c13">
                <div class="c131">
                    <img src="{{ url('/img/Imagem 22.png') }}" alt="" class="img-menu-card">
                </div>
                <div class="c132">
                    <div class="c132-title">
                        Super Burguer
                    </div>
                    <div class="c132-price">
                        R$ 27
                    </div>
                    <div class="c132-body">
                        Hambúguer bovino de 320g,
                        pão brioche, queijo Prato, queijo
                        Cheddar, cebola caramelizada,
                        ovo e maionese especial.
                    </div>
                    <div class="c132-check">
                        <input type="checkbox" class="check" name="first-burguer" value="27" onclick="myFunction()">
                    </div>
                </div>
            </div>
            <div class="c14">
                <div class="c141">
                    <img src="{{ url('/img/Imagem 23.png') }}" alt="" class="img-menu-card">
                </div>
                <div class="c142">
                    <div class="c142-title">
                        Home Burguer
                    </div>
                    <div class="c142-price">
                        R$ 30
                    </div>
                    <div class="c142-body">
                        Hambúrguer bovino de 320g,
                        pão brioche, queijo Prato, bacon,
                        batata Crispy, tomate, alface e
                        maionese especial.
                    </div>
                    <div class="c142-check">
                        <input type="checkbox" class="check" name="first-burguer" value="30" onclick="myFunction()">
                    </div>
                </div>
            </div>
        </div>
        <div class="empty"></div>
    </div>
    <div class="additional-menu">
        <div class="drinks">
            <div class="drinks-title">
                BEBIDAS
            </div>
            <div class="drinks-list">
                1. Água mineral 500ml
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="3" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 3</span>
            </div>
            <div class="drinks-list">
                2. Guaraná Antarctica Lata
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="5" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 5</span>
            </div>
            <div class="drinks-list">
                3. Coca-cola lata
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="5" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 5</span>
            </div>
            <div class="drinks-list">
                4. Água mineral com gás 500ml
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="3" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 3</span>
            </div>
        </div>
        <div class="additionals">
            <div class="drinks-title">
                ADICIONAIS
            </div>
            <div class="drinks-list">
                1. Bacon
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="3" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 3</span>
            </div>
            <div class="drinks-list">
                2. Maionese especial
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="2" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 2</span>
            </div>
            <div class="drinks-list">
                3. Cebola caramelizada
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="2" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 2</span>
            </div>
            <div class="drinks-list">
                4. Queijo Cheddar
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="3" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 3</span>
            </div>
            <div class="drinks-list">
                5. Queijo prato
                <input type="checkbox" class="drinks-checkbutton" onclick="myFunction()" value="3" name="first-burguer" value="guloso-burguer">
                <span class="additional-value">R$ 3</span>
            </div>
        </div>
    </div>
    <div class="final-empty"></div>

@endsection
