<!DOCTYPE html>
<head>
    <title>BIP - Torne seu lugar melhor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin.css') }}" />
</head>
<body>
    <div class="side-bar">
        <img class="svg" src="{{ url('/img/Logomarca - Best Places.svg') }}"></img>
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
