<!DOCTYPE html>
<head>
    <title>BIP - Torne seu lugar melhor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/1483fe3568.js" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin.css') }}" />
</head>
<body>
    <div class="side-bar">
        <img class="svg" src="{{ url('/img/Logomarca - Best Places.svg') }}"></img>
        <div class="sidebar">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="active">
                <a class="dropdown-toggle" href="#messagesSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="far fa-comment-alt"></i> Mensagens
                </a>
                <ul class="collapse list-unstyled" id="messagesSubmenu">
                    <li>
                        <a href="{{route('email.create')}}">Criar mensagens</a>
                    </li>
                    <li>
                        <a href="{{route('email.index')}}">Verificar mensagens criadas</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{route('email.toSend')}}">
                    <i class="fas fa-envelope-open-text"></i> Enviar Emails</a>
            </li>

            <li>
                <a href="{{route('password.change')}}"><i class="fas fa-key"></i>
                Alterar Senha</a>
            </li>


            <li>
                <a class="" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</div>


    </div>
    <div class="body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Plano</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($FormResponse as $answer)
              <tr>
                <th scope="row">1</th>
                <td>{{ $answer->nome }}</td>
                <td>{{ $answer->email }}</td>
                <td>{{ $answer->telefone }}</td>
                <td>{{ $answer->plano }}</td>
              </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
