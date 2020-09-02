<!DOCTYPE html>
<head>
    <title>BIP - Torne seu lugar melhor</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/1483fe3568.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin.css') }}" />
</head>

<body>
<div class="side-bar">
        <img class="svg" src="{{ url('/img/Logomarca - Best Places.svg') }}"></img>
        <div class="sidebar">
    <nav id="sidebar">
            <div class="grow">
            <a href="{{route('email.create')}}">Criar mensagens</a>
            </div>
            <div class="grow">
            <a href="{{route('email.index')}}">Verificar mensagens criadas</a>
            </div>
            <li>
                <div class="grow">
                <a href="{{route('email.toSend')}}">
                    <i class="fas fa-envelope-open-text"></i> Enviar Emails</a></div>
            </li>

            <li>
                <div class="grow">
                <a class="" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Sair
                </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
    </nav>
</div>


</div>
@yield('conteudo')
</body>

</html>
