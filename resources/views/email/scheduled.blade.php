@extends('home')
<link rel="stylesheet" type="text/css" href="{{ url('/css/emailscheduled.css') }}" />

@section('conteudo')
    @if(\Session::has('errors'))
        <div class="alert alert-danger" role="alert">
            <li>{!! \Session::get('errors') !!}</li>
        </div>
        @elseif(\Session::has('success'))
            <div class="alert alert-success" role="alert">
                <li>{!! \Session::get('success') !!}</li>
            </div>
    @endif
    @if(count($user_emails_scheduled)==0)
        <div class="title">{{ __('Não existem emails agendados') }}</div>
        @else
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="title">{{ __('Emails agendados') }}</div>
                    <hr>
                    <div class="">
                        <h3>Título do email</h3>
                        <p>{{$email->title}}</p>
                        <h3>Corpo do email</h3>
                        <p>{{$email->body}}</p>
                        <h3>Frequência de envio</h3>
                        @switch($user_emails_scheduled[0]->frequency)
                        @case('Daily')
                            <p>Diariamente</p>
                            @break
                            @case('TwoPW')
                            <p>Duas vezes por semana (segunda e quarta) </p>
                            @break
                            @case('ThreePW')
                            <p>Três vezes por semana (segunda, quarta e sexta) </p>
                            @break
                            @case('Weekly')
                            <p>Uma vez por semana (segunda) </p>
                            @break
                            @case('Monthly')
                            <p>Uma vez por mês (primeiro dia do mês) </p>
                            @break
                        @endswitch
                        <h3>Horário de envio</h3>
                        <p>{{$user_emails_scheduled[0]->send_time }}</p>
                        <h3>Ultimo dia de envio</h3>
                        <p>{{$user_emails_scheduled[0]->last_day ? date('d/m/y',strtotime($user_emails_scheduled[0]->last_day)) : "Indefinido"}}</p>
                        <a href="{{route('email.finalize',$email)}}" class="btn btn-danger">Finalizar envio</a>
                        <div class="title">{{ __('Endereços de emails') }}</div>
                        <hr>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_emails_scheduled as $email)
                                <tr>
                                    <td>{{$email->user->name}}</td>
                                    <td>{{$email->user->email}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endif
@endsection
