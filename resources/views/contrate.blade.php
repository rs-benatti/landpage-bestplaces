@extends('layouts.layout')
@section('conteudo')
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
                                      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" id="InputEmail" name="email" placeholder="exemplo@seuemail.com">
                                      @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>Email já cadastrado</strong>
                                      </span>
                                      <script>
                                        $('#exampleModal').modal('toggle');
                                      </script>
                                  @enderror
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
                      <h1 class="textoVerde" style="font-size: 2.5em">Landing Page</h1>
                      <h1 class="textoVerde" style="font-size: 2.5em">R$679,00</h1>
                      <a class="card-subtitle mb-2" style="color: #fff;">Para pequenas empresas que estão
                        visando captar leads e se apresentar no mercado</a>
                        <p class="card-text" style="padding-top: 10px;"><img class="img-check" src="{{ url('/img/check verde.svg') }}"  width="40" height="40" align="left"/>Apresentação de sua empresa</p>
                        <p class="card-text"><img src="{{ url('/img/check verde.svg') }}"  width="40" height="40" align="left"/>Coleta de e-mails de clientes</p>
                        <p class="card-text"><img src="{{ url('/img/check verde.svg') }}"  width="40" height="40" align="left" style="margin-top: -7px"/>Barra de navegação</p>
                        <p class="card-text"><img src="{{ url('/img/check verde.svg') }}"  width="40" height="40" align="left" ="margin-top: -7px"/>Canal de vendas para seu cliente</p>
                        <div class="card-text"><img src="{{ url('/img/check verde.svg') }}"  width="40" height="40" align="left"/><blockquote class="blockquote-text">Espaço para cardápio/catálogo
                          de sua empresa</blockquote></div>

                      <div class="div-card-btn btn-normal">
                            <button class="btn btn-normal first card-btn btn-normal" type="button" data-toggle="modal" data-target="#exampleModal" style="border-color: #1a1a1a;">
                                Contratar
                            </button>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 100%; border-radius: 10px;">
                    <div class="card-body" style="width: 100%;">
                      <h1 class="textoAzul" style="font-size: 2.5em">Site intermediário</h1>
                      <h1 class="textoAzul" style="font-size: 2.5em">R$1500,00</h1>
                      <a class="card-subtitle mb-2" style="color: #fff;">Para empresas de médio porte que
                        além de captar leads e se apresentar
                        têm a intenção também de vender
                        na internet</a>
                        <p class="card-text" style="padding-top: 10px;"><img class="img-check" src="{{ url('/img/check azul.svg') }}"  width="40" height="40" align="left"/>Apresentação de sua empresa</p>
                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="40" height="40" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}" class="img-check" width="40" height="40" align="left"/>
                           Barra de navegação
                        </p>
                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}" class="img-check" width="40" height="40" align="left"/>Canal de vendas para o seu
                            cliente</p>
                            <div class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="40" height="40" align="left"/><blockquote class="blockquote-text">Cardápio/catálogo interativo
                                de sua empresa</blockquote></div>
                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}"  width="40" height="40" align="left"/>Envio automático de e-mails com promoções relâmpago</p>

                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}" class="img-check" width="40" height="40" align="left"/>
                            Seção de administrador
                        </p>
                        <p class="card-text"><img src="{{ url('/img/check azul.svg') }}" class="img-check" width="40" height="40" align="left"/>
                            Até 5 páginas
                        </p>
                      <div class="div-card-btn btn-normal" style="margin-top: 30px">
                            <button class="btn btn-normal first card-btn btn-normal" type="button" data-toggle="modal" data-target="#exampleModal" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #0569e2, #12519E);">
                                Contratar
                            </button>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 100%; border-radius: 10px; background-image: linear-gradient(to bottom, #0569e2, rgb(13, 51, 99));">
                    <div class="card-body" style="width: 100%;">
                      <h1 class="textoAzul" style="font-size: 2.5em; color: #fff;">Site avançado</h1>
                      <h1 class="textoAzul" style="font-size: 2.5em;  color: #fff;">R$2500,00</h1>
                      <a class="card-subtitle mb-2" style="color: #fff;">Para empresas grandes que querem
                        ir além e entregar um maior conforto
                        e comodidade para seus clientes a
                        fim de fidelizá-los</a>
                        <p class="card-text" style="padding-top: 10px;"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/>Apresentação de sua empresa</p>
                        <p class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
                        <p class="card-text"><img src="{{ url('/img/check branco.svg') }}" class="img-check" width="40" height="40" align="left"/>
                           Barra de navegação
                        </p>
                        <p class="card-text"><img src="{{ url('/img/check branco.svg') }}" class="img-check" width="40" height="40" align="left"/>Canal de vendas para o seu
                            cliente</p>
                            <div class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/><blockquote class="blockquote-text">Cardápio/catálogo interativo
                                de sua empresa</blockquote></div>
                        <p class="card-text"><img src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left"/>Envio automático de e-mails com promoções relâmpago</p>

                        <p class="card-text"><img src="{{ url('/img/check branco.svg') }}" class="img-check" width="40" height="40" align="left"/>
                            Seção de administrador
                        </p>
                        <div class="card-text" style="margin-top: 20px;"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left" /><blockquote class="blockquote-text">Blog</blockquote></div>
                        <div class="card-text" style="margin-top: 20px;"><img class="img-check" src="{{ url('/img/check branco.svg') }}"  width="40" height="40" align="left" /><blockquote class="blockquote-text">Faz o SEO do Google</blockquote></div>
                        <p class="card-text"><img src="{{ url('/img/check branco.svg') }}" class="img-check" width="40" height="40" align="left"/>
                            Até 10 páginas
                        </p>
                      <div class="div-card-btn btn-normal"  style="margin-top: 30px">
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
      <div class="d-block d-sm-block d-md-block d-xl-none">
        <div class="card container" style="width: 70%; border-radius: 30px;">
            <div class="card-body" style="width: 100%;">
              <h1 class="textoVerde" style="font-size: 3.5em">Landing Page</h1>
              <h1 class="textoVerde" style="font-size: 3.5em">R$679,00</h1>
              <a class="card-subtitle mb-2" style="color: #fff;">Para pequenas empresas que estão
                visando captar leads e se apresentar no mercado</a>

              <p class="card-text" style="padding-top: 10px;"><img src="{{ url('/img/check verde.svg') }}"  width="100" height="100" align="left"/>Apresentação de sua empresa</p>
              <p class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check verde.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/>Coleta de e-mails de clientes</p>
              <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check verde.svg') }}"  width="100" height="100" align="left"/><blockquote class="blockquote-text">Espaço para cardápio/catálogo
                de sua empresa</blockquote></div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check verde.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">Barra de navegação</blockquote></div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check verde.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">
                    Canal de vendas para seu cliente</blockquote></div>
              <div class="div-card-btn btn-normal">
                <div class="second-card-btn">
                    <a href="/form3">
                    <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a;">
                        Contratar
                    </button>
                    </a>
                </div>
                </div>
            </div>
            </div>

        <div class="card container" style="width: 70%; border-radius: 30px;">
            <div class="card-body" style="width: 100%;">
              <h1 class="textoAzul" style="font-size: 3.5em">Site intermediário</h1>
              <h1 class="textoAzul" style="font-size: 3.5em">R$1500,00</h1>
              <a class="card-subtitle mb-2" style="color: #fff;">Para empresas de médio porte que
                além de captar leads e se apresentar
                têm a intenção também de vender
                na internet</a>
                <p class="card-text" style="padding-top: 10px;"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/>Apresentação de sua empresa</p>
                <p class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/><blockquote class="blockquote-text">Cardápio/catálogo interativo
                  de sua empresa</blockquote></div>
                  <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">Barra de navegação</blockquote></div>
                  <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">
                      Canal de vendas para seu cliente</blockquote></div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left"/><blockquote class="blockquote-text">
                  Envio automático de e-mails com promoções relâmpago
                </blockquote>
                </div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">
                    Seção de administrador</blockquote></div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check azul.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">
                    Até 5 páginas</blockquote></div>
              <div class="div-card-btn btn-normal">
                <div class="second-card-btn">
                    <a href="/form3">
                    <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #0569e2, #12519E);">
                        Contratar
                    </button>
                    </a>
                </div>
                </div>
            </div>
        </div>
        <div class="card container" style="width: 70%; border-radius: 30px; background-image: linear-gradient(to bottom, #0569e2, rgb(13, 51, 99));">
            <div class="card-body" style="width: 100%;">
              <h1 class="textoAzul" style="font-size: 3.5em; color: #fff;">Site avançado</h1>
              <h1 class="textoAzul" style="font-size: 3.5em;  color: #fff;">R$<2500,00</h1>
              <a class="card-subtitle mb-2" style="color: #fff;">Para empresas grandes que querem
                ir além e entregar um maior conforto
                e comodidade para seus clientes a
                fim de fidelizá-los</a>
                <p class="card-text" style="padding-top: 10px;"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/>Apresentação de sua empresa</p>
                <p class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/>Coleta de e-mails de clientes para seu banco de dados</p>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/><blockquote class="blockquote-text">Cardápio/catálogo interativo
                  de sua empresa</blockquote></div>
                  <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">Barra de navegação</blockquote></div>
                  <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">
                      Canal de vendas para seu cliente</blockquote></div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left"/><blockquote class="blockquote-text">
                  Envio automático de e-mails com promoções relâmpago
                </blockquote>
                </div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">
                    Seção de administrador</blockquote></div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">
                    Blog</blockquote></div>
                <div Faz o SEO no Google</blockquote></div>
                <div class="card-text" style="margin-top: 50px"><img src="{{ url('/img/check branco.svg') }}"  width="100" height="100" align="left" style="margin-top: -20px"/><blockquote class="blockquote-text">
                    Até 10 páginas</blockquote></div>
              <div class="div-card-btn btn-normal">
                <div class="second-card-btn">
                    <a href="/form3">
                        <button class="btn btn-normal first card-btn btn-normal" type="button" style="border-color: #1a1a1a; background-image: linear-gradient(to right, #fff, #fff); color:#0569e2;">
                            Contratar
                        </button>
                    </a>
                </div>
                </div>
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
      <div class="footer">
        <div class="contratar-footer">
            <a class="anchor-footer" href="/contrate">
                Contratar nosso serviço
            </a>
        </div>
        <div class="contratar-footer">
            <a class="anchor-footer" href="/suporte">
                Fale conosco
            </a>
        </div>
        <div class="copy-footer">
            <p>
                © 2020 Best Places - ROCHA & LAVIGNE MARKETING LTDA., CNPJ 35.129.745/0001-30, Rua Turcides De Moraes, 58, Edif Casa De Barro Loja 08 Anexo Ii, Centro, Conceicao Do Jacuipe, BA, CEP 44245-000, Brasil
            </p>
        </div>
      </div>
@endsection
