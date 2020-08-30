<!DOCTYPE html>
<head>
    <title>BIP - Torne seu lugar melhor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}" />
</head>
<body>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-grid">
                <div class="c11">
                <form method="POST" action="/enviaEmail/create">
                    @csrf
                  <div class="modal-header">
                    <div class="modal-title"><h2>Quase lá!</h2><h4>Entraremos em contato</h4></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="form-group">
                                      <label for="InputEmail">E-mail</label>
                                      <input type="email" class="form-control" id="InputEmail" name="email" placeholder="exemplo@seuemail.com">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-group">
                                      <label for="InputNome">Nome completo</label>
                                      <input type="text" class="form-control" id="InputNome" name="nome" placeholder="Maria Oliveira da Silva">
                                  </div>
                              </div>
                              <div class="col-6">
                                  <div class="form-group">
                                      <label for="InputTel">Telefone</label>
                                      <input type="tel" class="form-control" id="InputTel" name="telefone" placeholder="(00) 0000-0000">
                                  </div>
                              </div>
                              <div class="col-6">
                                  <div class="form-group">
                                      <label for="InputPlano">Plano</label>
                                      <select class="form-control" id="InputPlano" name="plano">
                                          <option value="" selected disabled hidden>Selecione seu plano</option>
                                          <option>Plano básico</option>
                                          <option>Plano intermediário</option>
                                          <option>Plano avançado</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-normal first transform btn-modal">Fazer meu site!</button>
                  </div>
                </form>
                </div>
                <div class="c12">
                    <img src="{{ url('/img/Imagem 14.png') }}" alt="" class="img-modal-pc">
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid">
      <nav class="nav nav-pills nav-fill">
        <a class="nav-item textoBranco" id="imagemBP">
            <img class="svg" src="{{ url('/img/Logomarca - Best Places.svg') }}"></img>
        </a>
        <a class="nav-item nav-link" href="/">Início</a>
        <a class="nav-item nav-link" href="/suporte">Suporte</a>
        <a class="nav-item nav-link" href="/contrate">
            <button class="btn btn-normal first transform" type="button" id="botaoContratar">
                Contratar
            </button>
        </a>
      </nav>
    </div>
      <div id="manchete">
        <p class="textoAzul">Planos</p>
        <p class="textoBranco">Escolha o melhor plano para o seu negócio!</p>
        <p class="textoCinza">Esse é só o começo de uma sequência de melhorias</p>
      </div>
      <div class="d-none d-lg-block">
      <div class="container planos">
        <div class="row" style="margin-top: 150px;">
            <div class="col-4">
                <div class="card" style="width: 100%; border-radius: 10px;">
                    <div class="card-body" style="width: 100%;">
                      <h1 class="textoVerde" style="font-size: 2.5em">Iniciante</h1>
                      <h1 class="textoVerde" style="font-size: 2.5em">R$<span class="cortado">500</span> 400</h1>
                      <a class="card-subtitle mb-2" style="color: #fff;">Para pequenas empresas que estão
                        visando captar leads e se apresentar no mercado</a>
                        <p class="card-text" style="padding-top: 10px;"><img class="img-check" src="{{ url('/img/check verde.svg') }}"  width="40" height="40" align="left"/>Apresentação de sua empresa</p>
                        <p class="card-text"><img src="{{ url('/img/check verde.svg') }}"  width="40" height="40" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
                        <div class="card-text"><img src="{{ url('/img/check verde.svg') }}"  width="40" height="40" align="left"/><blockquote class="blockquote-text">Espaço para cardápio/catálogo
                          de sua empresa</blockquote></div>
                      <div class="div-card-btn btn-normal">
                        <div class="first-card-btn">
                            <a href="/landpagebasica">
                                <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a;">
                                    Visualizar
                                </button>
                            </a>
                        </div>
                        <div class="second-card-btn">
                            <button class="btn btn-normal first card-btn btn-normal" type="button" data-toggle="modal" data-target="#exampleModal" style="border-color: #1a1a1a;">
                                Contratar
                            </button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 100%; border-radius: 10px;">
                    <div class="card-body" style="width: 100%;">
                      <h1 class="textoAzul" style="font-size: 2.5em">Intermediário</h1>
                      <h1 class="textoAzul" style="font-size: 2.5em">R$<span class="cortado">700</span> 600</h1>
                      <a class="card-subtitle mb-2" style="color: #fff;">Para empresas de médio porte que
                        além de captar leads e se apresentar
                        têm a intenção também de vender
                        na internet</a>
                        <p class="card-text" style="padding-top: 10px;"><img class="img-check" src="{{ url('/img/check azul.svg') }}"  width="40" height="40" align="left"/>Apresentação de sua empresa</p>
                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="40" height="40" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
                        <div class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="40" height="40" align="left"/><blockquote class="blockquote-text">Espaço para cardápio/catálogo
                          de sua empresa</blockquote></div>
                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="40" height="40" align="left"/>Envio automático de e-mails com promoções relâmpago</p>
                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}" class="img-check" width="40" height="40" align="left"/>Canal de vendas para o seu
                        cliente</p>
                      <div class="div-card-btn btn-normal" style="margin-top: 30px">
                        <div class="first-card-btn">
                            <a href="/landpageintermediaria">
                                <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #0569e2, #12519E);">
                                    Visualizar
                                </button>
                            </a>
                        </div>
                        <div class="second-card-btn">
                            <button class="btn btn-normal first card-btn btn-normal" type="button" data-toggle="modal" data-target="#exampleModal" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #0569e2, #12519E);">
                                Contratar
                            </button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 100%; border-radius: 10px; background-image: linear-gradient(to bottom, #0569e2, rgb(13, 51, 99));">
                    <div class="card-body" style="width: 100%;">
                      <h1 class="textoAzul" style="font-size: 2.5em; color: #fff;">Avançado</h1>
                      <h1 class="textoAzul" style="font-size: 2.5em;  color: #fff;">R$<span class="cortado">850</span> 750</h1>
                      <a class="card-subtitle mb-2" style="color: #fff;">Para empresas grandes que querem
                        ir além e entregar um maior conforto
                        e comodidade para seus clientes a
                        fim de fidelizá-los</a>
                        <p class="card-text" style="padding-top: 10px;"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/>Apresentação de sua empresa</p>
                        <p class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
                        <div class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/><blockquote class="blockquote-text">Espaço para cardápio/catálogo
                        de sua empresa</blockquote></div>
                        <p class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/>Envio automático de e-mails com promoções relâmpago</p>
                        <p class="card-text"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/>Canal de vendas para o seu
                        cliente</p>
                        <div class="card-text" style="margin-top: 20px;"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left" /><blockquote class="blockquote-text">Blog</blockquote></div>
                        <div class="card-text" style="margin-top: 20px;"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left" /><blockquote class="blockquote-text">Barra de navegação</blockquote></div>
                        <div class="card-text" style="margin-top: 20px;"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left" /><blockquote class="blockquote-text">Portfólio</blockquote></div>
                        <div class="card-text" style="margin-top: 20px;"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left" /><blockquote class="blockquote-text">Suporte</blockquote></div>
                      <div class="div-card-btn btn-normal"  style="margin-top: 30px">
                        <div class="first-card-btn">
                            <a href="/landpageavancada">
                                <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #fff, #fff); color:#0569e2;">
                                    Visualizar
                                </button>
                            </a>
                        </div>
                        <div class="second-card-btn">
                            <button class="btn btn-normal first card-btn btn-normal" type="button" data-toggle="modal" data-target="#exampleModal" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #fff, #fff); color:#0569e2;">
                                Contratar
                            </button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      </div>
      <div class="d-block d-sm-block d-md-block d-xl-none">
        <div class="card container" style="width: 70%; border-radius: 30px;">
            <div class="card-body" style="width: 100%;">
              <h1 class="textoVerde" style="font-size: 3.5em">Iniciante</h1>
              <h1 class="textoVerde" style="font-size: 3.5em">R$<span class="cortado">500</span> 400</h1>
              <a class="card-subtitle mb-2" style="color: #fff;">Para pequenas empresas que estão
                visando captar leads e se apresentar no mercado</a>

              <p class="card-text" style="padding-top: 10px;"><img src="{{ url('/img/check verde.svg') }}"  width="100" height="100" align="left"/>Apresentação de sua empresa</p>
              <p class="card-text"><img src="{{ url('/img/check verde.svg') }}"  width="100" height="100" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
              <div class="card-text"><img src="{{ url('/img/check verde.svg') }}"  width="100" height="100" align="left"/><blockquote class="blockquote-text">Espaço para cardápio/catálogo
                de sua empresa</blockquote></div>
              <a href="/form3" class="div-card-btn btn-normal">
                <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a;">
                    Contratar
                </button>
              </a>
            </div>
        </div>
        <div class="card container" style="width: 70%; border-radius: 30px;">
            <div class="card-body" style="width: 100%;">
              <h1 class="textoAzul" style="font-size: 3.5em">Intermediário</h1>
              <h1 class="textoAzul" style="font-size: 3.5em">R$<span class="cortado">700</span> 600</h1>
              <a class="card-subtitle mb-2" style="color: #fff;">Para empresas de médio porte que
                além de captar leads e se apresentar
                têm a intenção também de vender
                na internet</a>
              <p class="card-text" style="padding-top: 10px;"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/>Apresentação de sua empresa</p>
              <p class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
              <div class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/><blockquote class="blockquote-text">Espaço para cardápio/catálogo
                de sua empresa</blockquote></div>
              <p class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/>Envio automático de e-mails com promoções relâmpago</p>
              <p class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/>Canal de vendas para o seu
              cliente</p>
              <a href="/form3" class="div-card-btn btn-normal">
                <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #0569e2, #12519E);">
                    Contratar
                </button>
              </a>
            </div>
        </div>
        <div class="card container" style="width: 70%; border-radius: 30px; background-image: linear-gradient(to bottom, #0569e2, rgb(13, 51, 99));">
            <div class="card-body" style="width: 100%;">
              <h1 class="textoAzul" style="font-size: 3.5em; color: #fff;">Avançado</h1>
              <h1 class="textoAzul" style="font-size: 3.5em;  color: #fff;">R$<span class="cortado">850</span> 750</h1>
              <a class="card-subtitle mb-2" style="color: #fff;">Para empresas grandes que querem
                ir além e entregar um maior conforto
                e comodidade para seus clientes a
                fim de fidelizá-los</a>
              <p class="card-text" style="padding-top: 10px;"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/>Apresentação de sua empresa</p>
              <p class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
              <div class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/><blockquote class="blockquote-text">Espaço para cardápio/catálogo
              de sua empresa</blockquote></div>
              <p class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/>Envio automático de e-mails com promoções relâmpago</p>
              <p class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/>Canal de vendas para o seu
              cliente</p>
              <div class="card-text" style="margin-top: 50px;"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">Blog</blockquote></div>
              <div class="card-text" style="margin-top: 50px;"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">Barra de navegação</blockquote></div>
              <div class="card-text" style="margin-top: 50px;"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">Portfólio</blockquote></div>
              <div class="card-text" style="margin-top: 50px;"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">Suporte</blockquote></div>
              <a href="/form3" class="div-card-btn btn-normal">
                <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #fff, #fff); color:#0569e2;">
                    Contratar
                </button>
              </a>
            </div>
        </div>
      </div>
      <div class="background3">
        <div class="textoBackground3">
            <div class="textoBranco" style="font-size: 3.5em;">
                Quer personalizar o seu plano?
            </div>
            <div class="textoBranco" style="font-family: 'Nexa Light'; line-height: 100px;">
                Entre em contato e iremos te ajudar!
            </div>
            <a href="/contatoPlanos" target="_blank">
            <button href="/contatoPlanos" class="btn btn-normal first vertical-center" type="button" target="_blank" style="border-radius: 30px; height: 45px; background-color: #144D92; font-size: 1.5em; width: 300px; margin-top: 10px;">
                Entre em contato
            </button>
            </a>
        </div>
      </div>
</body>
</html>
