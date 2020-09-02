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
<body class="form3-body">
    <form method="POST" action="/enviaEmail/create">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-title">
                        <h2 class="textoAzul">Quase lá!</h2>
                        <h4 class="textoAzul">Entraremos em contato</h4>
                        <h6 class="textoAzul">Preencha as informações abaixo para que possamos falar com você!</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="InputEmail">E-mail</label>
                        <input type="email" class="form-control form-control-lg" id="InputEmail" name="email" placeholder="exemplo@seuemail.com">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="InputNome">Nome completo</label>
                        <input type="text" class="form-control form-control-lg" id="InputNome" name="nome" placeholder="Maria Oliveira da Silva">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="InputTel">Telefone</label>
                        <input type="tel" class="form-control form-control-lg" id="InputTel" name="telefone" placeholder="(00) 0000-0000">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="InputPlano">Plano</label>
                        <select class="form-control form-control-lg" id="InputPlano" name="plano">
                            <option value="" selected disabled hidden>Selecione seu plano</option>
                            <option>Plano básico</option>
                            <option>Plano intermediário</option>
                            <option>Plano avançado</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">

                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-normal first transform btn-modal mobile-form">Enviar</button>
                </div>
            </div>
        </div>
        <div class="form-background">

        </div>
    </form>
</body>
