@extends('layouts.headlayout')
@section('conteudo')
    <div class="content-404">
        <div class="center-msg">
            404  |  Página não encontrada
        </div>

        <p class="paragraph-msg">
            Desculpe, a página que você está procurando não pode ser encontrada. Clique no botão abaixo para voltar para página principal.
        </p>
        <a href="/">
            <button class="btn btn-404 first transform" type="button" id="botaoContratar">
                Home
            </button>
        </a>
    </div>
@endsection

