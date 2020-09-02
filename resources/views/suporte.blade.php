@extends('layouts.layout')
@section('conteudo')
<div class="suporte-smooth-scroll">
    <div class="background4">
            <div class="textoBackground4" style="margin-top: -300px;">
                <div class="textoBranco" style="font-size: 3.5em; line-height: 120px;">
                    Ainda não entendeu completamente?
                </div>
                <div class="textoBranco" style="font-family: 'Nexa Light';line-height: 90px;">
                    A dúvida que te resta pode estar aqui embaixo
                </div>
                <p class="textoCinza" style="color: #fff;">
                    Se não achar, fica a vontade para falar com a gente!
                </p>
                <a href="/contatoWhatsApp">
                    <button class="btn first transform btn-branco btn-suporte" type="button" id="botaoContratar">
                        Entre em contato
                    </button>
                </a>
            </div>
          </div>
          <div class="container" style="margin-top: -100px;">
            <div class="row">
                <div class="col-3">
                    <a class="btn btn-normal botao-ancora first" href="/suporte#perguntas">
                        <p class="texto-botao-ancora">Perguntas frequentes</p>
                    </a>
                </div>
                <div class="col-3">
                    <a class="btn btn-normal botao-ancora first" href="/suporte#contratacao">
                        <p class="texto-botao-ancora texto-botao-ancora-curto">Contratação</p>
                    </a>
                </div>
                <div class="col-3">
                    <a class="btn btn-normal botao-ancora first" href="/suporte#problemas" style="vertical-align: middle;align-items:center;">
                        <p class="texto-botao-ancora">Seu site</p>
                    </a>
                </div>
                <div class="col-3">
                    <a class="btn btn-normal botao-ancora first" href="/suporte#conceitos">
                        <p class="texto-botao-ancora">Conceito básicos</p>
                    </a>
                </div>
            </div>
        </div>
          <div class="suporte">
            <a name="perguntas">
                <p class="textoBranco">Perguntas frequentes</p>
            </a>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                O domínio do site será exclusivo meu ou será em nome da Best Places?
            </div>
            <div class="textoBranco texto-suporte">
                O site é feito 100% para você. Logo, sim, domínio será exclusivamente seu.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Existe algum custo mensal que eu deva pagar para manutenção do site?
            </div>
            <div class="textoBranco texto-suporte">
                Não. Você só se preocupa com isso 1 vez por ano, pagando apenas R$50,00
                para renovação do domínio + R$50,00 para renovação da hospedagem.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                O que eu devo fazer para meu site começar a ser construído?
            </div>
            <div class="textoBranco texto-suporte">
                Entre em contato conosco e solicite o site do jeito que você deseja. A partir daí
                construiremos um Briefing(significado em conceitos básicos) para iniciar o
                desenvolvimento do seu site.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Desejo mais funcionalidades do que as que estão apresentadas no plano mais
                avançado. Quero personalizar meu plano, é possível?
            </div>
            <div class="textoBranco texto-suporte">
                Sim. Entre em contato com a gente e preparamos um orçamento exclusivo para
                o seu projeto.
            </div>
            <br>
            <a name="contratacao">
                <p class="textoBranco">Contratação</p>
            </a>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Solicitei meu site. Qual o prazo de entrega?
            </div>
            <div class="textoBranco texto-suporte">
                O prazo de entrega do plano A varia de 7 a 12 dias úteis; Plano B varia de 10 a
                15 dias úteis; Plano C varia de 12 a 20 dias úteis.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Como funciona o pagamento?
            </div>
            <div class="textoBranco texto-suporte">
                50% no momento da contratação e 50% na entrega do site.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Qual a forma de pagamento?
            </div>
            <div class="textoBranco texto-suporte">
                Transferência para conta bancária.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Recebi o meu site, mas desejo fazer mudanças. Sou indeciso(a) e sempre quero
                mudar alguma coisa. E aí, posso? Rs.
            </div>
            <div class="textoBranco texto-suporte">
                Não se preocupe, estamos aqui para te ajudar. Nós oferecemos nosso suporte
                de 6 meses gratuito para nossos clientes. Daí, você pode contar conosco para
                fazer qualquer alteração dentro das funcionalidades predeterminadas no briefing e
                corrigir bugs existentes no site.
            </div>
            <br>
            <a name="problemas">
                <p class="textoBranco">Seu site</p>
            </a>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Meu site está dando alguns bugs, o que fazer?
            </div>
            <div class="textoBranco texto-suporte">
                Nossa equipe de programadores está à sua disposição para resolver problemas
                relacionados ao seu site. Entre em contato conosco clicando no link do Whats App:
                ****
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Devo me preocupar com a estruturação de meu site, como organização dos
                elementos e design?
            </div>
            <div class="textoBranco texto-suporte">
                Não, a Best Places supre todas essas necessidades para você. Portanto, fique
                relaxado, aguarde o prazo de entrega para receber o seu site e impressione seus
                clientes com um design gráfico e User Experience (UX) incrível!
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Por onde passar todas a informações (verbais e não-verbais) que eu quero que
                estejam no meu site?
            </div>
            <div class="textoBranco texto-suporte">
                Essas questões são resolvidas já no momento da contratação. Um brefing será
                feito por nós para que o seu site fique o mais próximo possível do que você passou
                para nós.
            </div>
            <br>
            <a name="conceitos">
                <p class="textoBranco">Conceitos básicos</p>
            </a>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Briefing
            </div>
            <div class="textoBranco texto-suporte">
                A coleta e organização de todas a informações necessárias para a
                construção e desenvolvimento do seu site.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Landing Page
            </div>
            <div class="textoBranco texto-suporte">
                Uma página simples na qual você pode apresentar a sua empresa,
                catálogos, cardápios, formas de contato, etc.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                User Experience
            </div>
            <div class="textoBranco texto-suporte">
                Conceito aplicado para promover uma boa experiência ao usuário
                no seu site. Como: Facilidade de navegação, usabilidade simples,
                design enxuto, etc.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                User Experience
            </div>
            <div class="textoBranco texto-suporte">
                Conceito aplicado para promover uma boa experiência ao usuário
                no seu site. Como: Facilidade de navegação, usabilidade simples,
                design enxuto, etc.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Bug
            </div>
            <div class="textoBranco texto-suporte">
                Qualquer comportamento fora do esperado em seu site.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Domínio
            </div>
            <div class="textoBranco texto-suporte">
                O domínio é a URL que seu site assume.
            </div>
            <hr>
            <div class="textoBranco subtitulo-suporte">
                Hospedagem
            </div>
            <div class="textoBranco texto-suporte">
                Um espaço digital do qual o seu site precisa para que os seus
                arquivos sejam armazenados.
            </div>
            <br>
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
