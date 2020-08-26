<!DOCTYPE html>
<head>
    <title>BIP - Torne seu lugar melhor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Corben&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ url('css/landpageintermediaria.css') }}" />
    <script>
        function rotate(e){
            var divStyle = e.style;
            var backBlock = document.getElementById(e.className);
            divStyle.transform= 'rotateY(180deg)';
            document.getElementById(e.className).style.display = 'block';
            setTimeout(function(){document.getElementById(e.className).style.opacity = '1'; }, 300);
        }

        function desrotate(){
            var rotateElements = document.getElementsByClassName('back-block');
            var rotateElementsName =  document.getElementsByName('rotateName');
            var i;
            for (i = 0; i < rotateElements.length; i++) {
                rotateElementsName[i].style.transform = 'rotateY(360deg)';
                rotateElements[i].style.opacity = '0';
                rotateElements[i].style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <div class="background-1">
        <div class="nav-bar">
            <div class="a11 vertical-center">
                <a>Liberte.<span class="small">seguros</span></a>
            </div>
            <div class="a12 vertical-center">
                <button class="help">
                    ?
                 </button>
            </div>
        </div>
        <div class="headline">
            <p class="big-headline">POR QUEM VOCÊ AMA</p>
            <p class="small-headline">Faça a portabilidade do seu plano de saúde e seguros</p>
        </div>
    </div>
    <div class="blue-headline">
        <p class="big-headline">SE ASSEGURE, É IMPORTANTE</p>
        <p class="small-headline">Toque nas imagens para saber mais!</p>
    </div>
    <div class="img-grid">
        <div class="b11 hover" name="rotateName">
            <div class="back-block" id="b11">
                <div class="back-title reverse">
                    SEGURO DE AUTOMÓVEL
                </div>
                <div class="back-body reverse">
                    Diante de tantos aspectos, percebe-se que o seguro auto é mais do que essencial. O
                    ideal é fazê-lo assim que sair da concessionária. Não queremos nunca que aconteça
                    qualquer acidente. Mas caso aconteçam bom que tenhamos o nosso seguro. Carro é um
                    bem muito caro e desejado por qualquer brasileiro para não se ter um seguro.
                </div>
            </div>
        </div>
        <div class="b12 hover" name="rotateName">
            <div class="back-block" id="b12">
                <div class="back-title reverse">
                    SEGURO RESIDENCIAL
                </div>
                <div class="back-body reverse">
                    O seguro residencial lhe garante proteção contra uma série de
                    imprevistos que podem acontecer na sua casa própria que e te
                    oferece total tranquilidade em diversos casos.
                </div>
            </div>
        </div>
        <div class="b13 hover" name="rotateName">
            <div class="back-block" id="b13">
                <div class="back-title reverse">
                    SEGURO DE VIAGEM
                </div>
                <div class="back-body reverse">
                    Fazer um seguro viagem é ter a
                    recompensa real de viajar: Não
                    se preocupar com os problemas
                    e ter a tranquilidade de que na
                    pior da hipóteses, você terá todo
                    nosso suporte de seguros.
                </div>
            </div>
        </div>
        <div class="b21 hover" name="rotateName">
            <div class="back-block" id="b21">
                <div class="back-title reverse">
                    PLANO ODONTOLÓGICO
                </div>
                <div class="back-body reverse">
                    Além de manter a saúde da
                    boca, ter um plano odontológico
                    também ajuda a manter te
                    manter feliz. Ter um sorriso mais
                    bonito ajuda a aumentar a autoestima,
                    o que desencadeia muitas
                    outras melhoras: o relacionamento
                    interpessoal melhora e o
                    desempenho no trabalho também,
                    além de muitos outros
                    benefícios.
                </div>
            </div>
        </div>
        <div class="b22 hover" name="rotateName">
            <div class="back-block" id="b22">
                <div class="back-title reverse">
                    PLANO DE SAÚDE
                </div>
                <div class="back-body reverse">
                    Um plano de saúde é tão importante quanto um seguro de carro. Afinal, você contrata
                    este serviço preventivamente, para poder acioná-lo quando for preciso. Você não faz
                    seguro de carro pensando que poderá utilizá-lo amanhã, mas, se precisar, saberá das
                    coberturas e o nível de assistência contratado.
                </div>
            </div>
        </div>
        <div class="b23 hover" name="rotateName">
            <div class="back-block" id="b23">
                <div class="back-title reverse">
                    SEGURO DE VIDA
                </div>
                <div class="back-body reverse">
                    A melhor forma de demonstrar cuidado com a sua família é
                    proporcionando segurança, estabilidade, proteção e tranquilidade, o
                    que contribui para uma excelente qualidade de vida. Sua família é o
                    bem mais precioso que você possui.
                </div>
            </div>
        </div>
    </div>
    <div class="final-blue-headline">
        <p class="final-big-headline">FALE CONOSCO NO WHATSAPP</p>
        <p class="final-small-headline">Faça sua cotação e se despreocupe do que possa
            acontecer daqui em diante.</p>
    </div>
    <div class="final-button">
        <div class="small-pill"></div>
        <button class="button">
            FAZER COTAÇÃO
        </button>
        <div class="big-pill"></div>
    </div>
</body>
