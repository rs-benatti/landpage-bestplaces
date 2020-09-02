<div class="container-fluid">
      <nav class="nav nav-pills nav-fill">
        <a class="nav-item" id="imagemBP">
            <img class="svg" src="{{ url('/img/Logomarca - Best Places.svg') }}" width="281" height="75"></img>
        </a>
        <a class="nav-item nav-link atual" href="/">Início</a>
        <a class="nav-item nav-link" href="/suporte">Suporte</a>
        <a class="nav-item nav-link" href="/contrate">
            <!--
            <button class="btn first transform {{ Route::currentRouteName() == 'suporte' ? 'btn-branco' : ' btn-normal' }}" type="button" id="botaoContratar">
                {{Route::currentRouteName() =='suporte'? "Entre em contato" : "Contratar "}}
            </button>
        -->
        <button class="btn first transform btn-normal" type="button" id="botaoContratar">
            Contratar
        </button>
        </a>
      </nav>
    </div>
