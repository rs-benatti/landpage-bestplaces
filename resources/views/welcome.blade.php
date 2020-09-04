@extends('layouts.layout')
@section('conteudo')
<div id="manchete">
        <p class="textoVerde">Elimine barreiras</p>
        <p class="textoBranco">Seu projeto é muito maior que qualquer desafio!</p>
        <p class="textoCinza">Somos os melhores para tornar o seu <strong>site</strong> realidade!</p>
        <a href="/contrate">
        <button class="btn btn-normal first" type="button" id="botaoFaleConosco" style="border-color: #1a1a1a">
            Ver planos
        </button>
        </a>
      </div>
      <div class="onBackground1">
      <div class="background1">
        <div class="textBackground1">
        <p class="textoVerde" id="textoBackground">Um recomeço<br>para seu negócio!</p>
        <p class="textoBranco" style="margin-left: -100px;"> As coisas nunca são, elas sempres estão.<br>Tudo vai passar e as coisas vão melhorar!<br>E para isso você precisa se adaptar e <br> evoluir!</p>
        </div>
      </div>
      </div>
      <div class="d-none d-lg-block">
      <div class="container">
          <div class="row">
              <div class="col-4 flex-center">
                <img src="{{ url('/img/Imagem 2.png') }}" width=75%>
              </div>
              <div class="col-8 marginRight">
                    <p class="textoVerde" style="font-size: 2em; margin-left: 50px; margin-top: -10px;">
                        <a class="btn-flip after-margin" data-back="Hoje a compra online é preferência para 74% dos consumidores brasileiros. O seu negócio na internet, com um site profissional, vai fazer suas vendas e seu alcance voarem!" data-front="Alcance pessoas
onde elas
estiverem!"></a>
                    </p>
                  <div style="margin-top: 50px; margin-left: -20px;">
                    <a class="btn-texto">
                    </a>
                  </div>
              </div>
          </div>
          <div class="row" style="margin-top: 100px;">
              <div class="col-8 ">
                  <p class="textoVerde" style="font-size: 2em; margin-left: 50px; color: #1055A9; text-align: right;">
                    <a class="btn-flip esquerda marginLeft" data-back="Garanta que seus clientes saibam que agora seu negócio se renovou, está de cara nova. Compartilhe seu novo site com seus clientes e com quem ainda não é seu cliente!" data-front="Comunique-se
com seus clientes!"></a>
                  </p>
              </div>
              <div class="col-4 flex-center">
                <img src="{{ url('/img/Imagem 3.png') }}" width=75%>
              </div>
          </div>
          <div class="row" style="margin-top: 0px;">
            <div class="col-4 flex-center">
                <img src="{{ url('/img/Imagem 4.png') }}" width=75%>
            </div>
            <div class="col-8 marginRight">
                <p class="textoVerde" style="font-size: 2em; margin-left: 50px; text-align: left;">
                    <a class="btn-flip tituloPequeno" data-back="Os seus clientes vão procurar o teu negócio na internet e
                    vão encontrar. Quem ainda não o conhece, vai pesquisar
                    algo relacionado e vai te encontrar. E para isso, ter um site
                    de qualidade é o primeiro passo." data-front="Seja facilmente
encontrado!"></a>
                </p>
              <div style="margin-left: -20px;">
                  <a href="/contrate">
                <button class="first btn-texto-custom" type="button">
                  Quero fazer meu site! &rarr;
                </button>
                  </a>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 100px;">
            <div class="col-8">
                <p class="textoVerde" style="font-size: 2em; margin-left: 50px; color: #1055A9; text-align: right;">
                  <a class="btn-flip esquerda textoPequeno" data-back="Mantenha seus clientes sempre atualizados. Tenha um
                  espaço para atualização diária do seu negócio!" data-front="Mostre novidades
e lançamentos"></a>
                </p>
            </div>
            <div class="col-4 flex-center">
              <img src="{{ url('/img/Imagem 5.png') }}" width=75%>
            </div>
          </div>
          <div class="row" style="margin-top: 100px;">
            <div class="col-4 flex-center">
                <img src="{{ url('/img/Imagem 6.png') }}" width=75%>
            </div>
            <div class="col-8 marginRight">
                <p class="textoVerde" style="font-size: 2em; margin-left: 50px; margin-top: -20px; text-align: left;">
                    <a class="btn-flip textoQuebrado" data-back="Tudo passa a acontecer em um lugar só,
em seu novo site.
Não é mais necessário:
-A atendente ficar falando o que
tem no cardápio, sendo que
no site tem tudo.
-Ter que realizar uma venda por
telefone.
-Se preocupar com o isolamento social" data-front="Otimize processos
para você e
seus clientes"></a>
                </p>
            </div>
          </div>
          <div class="row" style="margin-top: 100px;">
            <div class="col-8">
                <p class="textoVerde" style="font-size: 2em; margin-left: 50px; color: #1055A9; text-align: right;">
                  <a class="btn-flip esquerda textoQuebrado" data-back="Coloque no ar todos os produtos/serviços que você
vende, gerando uma experiência incrível para o seu
cliente! Com apenas 1 clique, ele poderá selecionar
o que deseja e em seguida realizar a compra!

Aqui vai um exemplo de como o cliente pode efetuar
uma compra. Selecione seus itens e clique em finalizar:" data-front="Deixe as vendas
acontecerem no automático"></a>
                </p>
            </div>
            <div class="col-4 flex-center">
              <img src="{{ url('/img/Imagem 7.png') }}" width=75%>
            </div>
          </div>
      </div>
      </div>
      <div class="d-block d-sm-block d-md-block d-xl-none">
        <div class="imagensCirculares" style="margin-top: 200px;">
            <img src="{{ url('/img/Imagem 2.png') }}" width=70%>
            <p class="textoVerde mobile">
                Alcance pessoas onde elas estiverem!
            </p>
            <p class="textoBranco" style="margin-top: 40px;">
                Hoje a compra online é preferência para 74% dos consumidores brasileiros. O seu negócio na internet, com um site profissional, vai fazer suas vendas e seu alcance voarem!
            </p>
        </div>
        <div class="imagensCirculares" style="margin-top: 200px;">
            <img src="{{ url('/img/Imagem 3.png') }}" width=70%>
            <p class="textoVerde mobile" style="color: #1055A9;">
                Comunique-se com seus clientes
            </p>
            <p class="textoBranco" style="margin-top: 40px;">
                Garanta que seus clientes saibam que agora seu negócio se renovou,
                está de cara nova. Compartilhe seu novo site com seus clientes
                e com quem ainda não é seu cliente!
            </p>
        </div>
        <div class="imagensCirculares" style="margin-top: 200px;">
            <img src="{{ url('/img/Imagem 4.png') }}" width=70%>
            <p class="textoVerde mobile">
                Seja facilmente encontrado!
            </p>
            <p class="textoBranco" style="margin-top: 40px;">
                Os seus clientes vão procurar o teu negócio na internet e
                vão encontrar. Quem ainda não o conhece, vai pesquisar
                algo relacionado e vai te encontrar. E para isso, ter um site
                de qualidade é o primeiro passo.
            </p>
        </div>
        <div class="imagensCirculares" style="margin-top: 200px;">
            <img src="{{ url('/img/Imagem 5.png') }}" width=70%>
            <p class="textoVerde mobile" style="color: #1055A9;">
                Otimize processos para você e seus clientes
            </p>
            <p class="textoBranco" style="margin-top: 40px;">
                Tudo passa a acontecer em um lugar só,
                em seu novo site.
                Não é mais necessário:<br>
                -A atendente ficar falando o que
                tem no cardápio, sendo que
                no site tem tudo.<br>
                -Ter que realizar uma venda por
                telefone.<br>
                -Se preocupar com o isolamento social
            </p>
        </div>
        <div class="imagensCirculares" style="margin-top: 200px;">
            <img src="{{ url('/img/Imagem 6.png') }}" width=70%>
            <p class="textoVerde mobile">
                Deixe as vendas acontecerem no automático
            </p>
            <p class="textoBranco" style="margin-top: 40px;">
                Coloque no ar todos os produtos/serviços que você
                vende, gerando uma experiência incrível para o seu
                cliente! Com apenas 1 clique, ele poderá selecionar
                o que deseja e em seguida realizar a compra!<br><br>

                Aqui vai um exemplo de como o cliente pode efetuar
                uma compra. Selecione seus itens e clique em finalizar:
            </p>
        </div>
    </div>
      <div id="cartaoAzul">
      <div class="caixaCatalogo">
        <form action='/enviaWhatsApp'>
        <div class="textoVerde" style="color: #1055A9; text-align: center; align-content: center;">
            <p style="text-align: center; font-size: 0.7em; padding-top: 30px">Catálogo</p>
        </div>
        <div class="itemList">
          <div class="textItem">
          <p> 1. Pizza </p>
          <div class="catalogoCheck">
            <input type="checkbox" class="check" name="checkUm" value="Pizza">
          </div>
          </div>
        </div>
        <div class="itemList">
          <div class="textItem">
          <p> 2. Hamburguer </p>
          <div class="catalogoCheck">
            <input type="checkbox" class="check" name="checkDois" value="Hamburguer">
          </div>
        </div>
        </div>

        <div class="itemList">
          <div class="textItem">
          <p> 3. Refrigerante </p>
          <div class="catalogoCheck">
            <input type="checkbox" class="check" name="checkTres" value="Refrigerante">
          </div>
        </div>
        </div>
        <div class="itemList">
          <div class="textItem">
          <p> 4. Sobremesa </p>
          <div class="catalogoCheck">
            <input type="checkbox" class="check" name="checkQuatro" value="Sobremesa">
          </div>
        </div>
        </div>
        <div class="btn-catalogo">
            <button formtarget="_blank" href="/enviaWhatsApp" class="btn btn-normal first" type="submit" style="border-radius: 10px; height: 45px; background-color: #144D92;">
               Finalizar compra
            </button>
        </div>
        </form>
      </div>
    </div>
      <div class="background2">
        <div class="textoBranco">
            <div class="container">
                <div class="row" style="padding-top: 200px;">
                    <div class="col-6"></div>
                    <div class="col-6" style="text-align: center;">
                        <p>É um diferencial para o seu negócio, é um diferencial na sua vida</p>
                        <a href="/contrate">
                        <button class="btn btn-normal first vertical-center" type="button" style="border-radius: 10px; height: 45px; background-color: #144D92; font-size: 0.5em; width: 200px;">
                            Fazer meu site
                        </button>
                        </a>
                    </div>
                </div>
            </div>
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
