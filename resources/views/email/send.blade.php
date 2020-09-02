@extends('layouts.admin')
<link rel="stylesheet" type="text/css" href="{{ url('/css/sendmail.css') }}" />

@section('conteudo')
    <div class="container">
        <div class="title">Emails</div>
        <form method="POST" action="{{route('email.sendMail')}}" id="formulario">
            <input type="hidden" id="tipo_email" value="">
        <table class="table">
            <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Corpo</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($emails as $email)
                <tr>
                    <th scope="row">{{$email->id}}</th>
                    <td>{{$email->title}}</td>
                    <td>{{$email->body}}</td>
                    <td><button type="button" class="btn btn-info " data-toggle="modal" data-target="#{{$hashids1->encode($email->id)}}">Enviar email</button></td>
               <!-- Modal -->
<div id="{{$hashids1->encode($email->id)}}" aria-labelledby="{{$hashids1->encode($email->id)}}" tabindex="-1" class="modal fade" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enviar email</h4>
            </div>
            <div class="modal-body">
                <h3>Título do email:</h3>
                <p>{{$email->title}}</p>
                    <h3>Corpo do email:</h3>
                    <p>{{$email->body}}</p>
                <hr/>
                <input type="hidden" name="email" value="{{$hashids1->encode($email->id)}}">
                    @csrf
                    <h3>Usuários - <input type="checkbox" name="select-all" class="select-all" value="{{$hashids1->encode($email->id)}}"> Selecionar tudo</h3>
                    <div class="users " style= "overflow: auto; width: 400px; height: 100px;">
                        @foreach($users as $user)
                            <input type="checkbox" class="{{$hashids1->encode($email->id)}}" name="users[]" value="{{$hashids2->encode($user->id)}}"> {{$user->name}} - {{$user->email}}
                            <hr>
                        @endforeach
                    </div>
                    <button type="submit" id="botao" onclick="fid('{{$hashids1->encode($email->id)}}');" name="button_now" value="now" class="btn btn-success">Enviar 1 vez imediatamente</button>

                    <a data-q_id="{{$hashids1->encode($email->id)}}" onclick="fid('{{$hashids1->encode($email->id)}}')" class="btn btn-success send_l">Enviar depois</a>
                    <div id="{{$hashids1->encode($email->id)}} modal" style="display:none;">
                        <h3>Frequência de envio</h3>
                        <input type="radio" id="Weekly-{{$hashids1->encode($email->id)}}" name="frequency" value="Weekly">
                        <label for="Weekly-{{$hashids1->encode($email->id)}}">Enviar 1 vez por semana (segunda) </label><br>

                        <input type="radio" id="twicepw-{{$hashids1->encode($email->id)}}" name="frequency" value="TwoPw">
                        <label for="twicepw-{{$hashids1->encode($email->id)}}">Enviar 2 vezes por semana (segunda e quarta)</label><br>

                        <input type="radio" id="threepw-{{$hashids1->encode($email->id)}}" name="frequency" value="ThreePW">
                        <label for="threepw-{{$hashids1->encode($email->id)}}">Enviar 3 vezes por semana (segunda, quarta e sexta) </label><br>

                        <input type="radio" id="oncepm-{{$hashids1->encode($email->id)}}" name="frequency" value="Monthly">
                        <label for="oncepm-{{$hashids1->encode($email->id)}}">Enviar 1 vez por mês (segunda) </label><br>

                        <h3>Horário de envio</h3>
                        <input type="time" id="{{$hashids1->encode($email->id)}}"
                               name="hora"><br>
                        <h3>Enviar até</h3>
                        <input type="date" min="{{\Carbon\Carbon::now()->toDateString()}}" id="{{$hashids1->encode($email->id)}}" class="last_day" name="last_day">
                        <label for="not_due_date" class="col-md-4 col-form-label text-md-right">{{ __('Indefinido') }}</label>
                        <input class="not_due_date" id="{{$hashids1->encode($email->id)}}" type="radio"   class="@error('not_due_date') is-invalid @enderror" name="not_due_date" value="1"  autocomplete="not_due_date">
                        <button type="submit" class="btn btn-success" onclick="lat();">Enviar</button>
                    </div>
            </div>
                <div class="modal-footer">
                <button type="button" id="botao" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

                </tr>

            @endforeach
            </tbody>
        </table>
        </form>

    </div>


<script>
    var later = false;
    var form_id = "";

    function fid(id){
        form_id = id;
        console.log(form_id);
    }
    function lat(){
        later = true;
    }
    $(document).ready(function () {
        $('.select-all').click(function(event) {
            var valor = this.value;
            if(this.checked) {
                // Iterate each checkbox
                $('input.'+valor+'[type=checkbox]').each(function() {
                    this.checked = true;
                });
            } else {
                $('input.'+valor+'[type=checkbox]').each(function() {
                    this.checked = false;
                });
            }
        });

        $('.send_l').on('click',function(){
            var a = $(this).data('q_id');
            showDiv(a);
        });

        $('#formulario').on('submit',function(e){
            e.preventDefault();
            id_form = $(this).data("id_form");
            var atLeastOneIsChecked = false;
            $('input.'+form_id+'[type=checkbox').each(function() {
                if(this.checked){
                    atLeastOneIsChecked = true;
                }
            });
            if(atLeastOneIsChecked){
                if(later){
                    if(!($('#Weekly-'+form_id+':checked').length>0 || $('#twicepw-'+form_id+':checked').length>0 || $('#threepw-'+form_id+':checked').length>0 || $('#oncepm-'+form_id+':checked').length>0)|| ($('input[type=time][id=form_id]').val()== '') ||                !($('.last_day').filter('#'+form_id).val()!='' || $('.not_due_date').filter('#'+form_id+':checked').length>0) ){
                        alert("Não se esqueça de marcar alguns dados de envio");
                    }else{
                        this.submit();
                    }

                    }else{
                    $("<input />").attr("type", "hidden")
                        .attr("name", "button_now")
                        .attr("value", "now")
                        .appendTo("#formulario");
                    this.submit();
                }

            }else{
                alert("Não esqueça de selecionar pelo menos um email para enviar")
            }
        });

        $('.not_due_date').click(function(){
            id = this.id;
            $('.last_day').filter('#'+id).val('');
        });

        $('.last_day').click(function(){
            id = this.id;
            $('.not_due_date').filter('#'+id).prop("checked",false);
        });


    });

    function showDiv(id) {
        document.getElementById(id+" modal").style.display = "";
    }



</script>

@endsection

