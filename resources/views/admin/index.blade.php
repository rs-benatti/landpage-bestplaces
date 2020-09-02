 @extends('layouts.admin')
 @section('conteudo')

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

@endsection
