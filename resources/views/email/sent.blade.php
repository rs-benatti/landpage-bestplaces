@extends('home')
<link rel="stylesheet" type="text/css" href="{{ url('/css/emailscheduled.css') }}" />
@section('conteudo')
    @if(\Session::has('success'))
        <div class="alert alert-success" role="alert">
            <li>{!! \Session::get('success') !!}</li>
        </div>
    @endif

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="title">{{ __('Envios') }}</div>
                    <div class="">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Usuário</th>
                                <th scope="col">Email</th>
                                <th scope="col">Data e hora de envio</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sent as $email)
                                <tr>
                                    <th scope="row">{{$email->user->name}}</th>
                                    <td>{{$email->user->email}}</td>
                                    <td>{{date('d/m/Y H:i',strtotime($email->send_timer))}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$sent->render()}}

                </div>

            </div>
        </div>
    </div>
@endsection
