<!DOCTYPE html>
<head>
    <title>BIP - Torne seu lugar melhor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/landpagecardapio.css') }}" />
    <script>
        function myFunction(){
            var node = document.getElementsByClassName('check');
            var total = 0;
            var val = 0;
            for (var i=0, len=node.length; i<len; i++) {
                if (node[i].checked == true){
                    total = parseInt(total) + parseInt(document.getElementsByClassName('check')[i].value);
                }
                else{

                }
            }
            var additional = document.getElementsByClassName('drinks-checkbutton');
            for (var j=0, len=additional.length; j<len; j++) {
                if (additional[j].checked == true){
                    total = parseInt(total) + parseInt(document.getElementsByClassName('drinks-checkbutton')[j].value);
                }
                else{

                }
            }

            document.getElementById('finish-price').innerHTML = 'R$ ' + total;
        }
    </script>
</head>
<body class="contato-body">
    <div class="a11">
        <div class="navigation">
            <div class="b11">
                <a href="/landpageavancada" class="nav-a">
                    Home
                </a>
            </div>
            <div class="b12">
                <a href="/landpageavancada/cardapio" class="nav-a-current">
                    <strong>Cardápio</strong>
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
    </div>
    <div class="finish-buy">
        <span id="finish-price">R$ 0</span><br />
        Finalizar
    </div>
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
</body>
