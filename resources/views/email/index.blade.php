@extends('layouts.admin')
<link rel="stylesheet" type="text/css" href="{{ url('/css/emailindex.css') }}" />

@section('conteudo')
    @if(\Session::has('success'))
        <div class="alert alert-success" role="alert">
            <li>{!! \Session::get('success') !!}</li>
        </div>
    @endif

    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="title nexa-bold">{{ __('Emails') }}</div>
                    <div class="">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="nexa-light" scope="col">#</th>
                                <th class="nexa-light" scope="col">Título</th>
                                <th class="nexa-light" scope="col">Corpo</th>
                                <th class="nexa-light" scope="col">Anexo?</th>
                                <th class="nexa-light" scope="col">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($emails as $email)
                                <tr>
                                    <th scope="row">{{$email->id}}</th>
                                    <td>{{$email->title}}</td>
                                    <td>
                                        <div id="divcontent">
                                        {{$email->body}}
                                        </div>
                                    </td>
                                    <td>{{$email->attachment? "Sim" : "Não"}}</td>
                                    <td>
                                        <a href="{{route('email.scheduled',$email)}}" class="btn btn-success"> Verificar Agendados</a>
                                        <a href="{{route('email.sent',$email)}}" class="btn btn-info">Verificar Enviados</a>
                                        <a href="{{route('email.edit',$email)}}" class="btn btn-outline-success">Editar</a>
                                        <form method="POST" action="{{route('email.destroy', $email)}}">
                                            @csrf
                                            {!! method_field('delete') !!}
                                            <input type="submit" class="btn btn-danger" value="Apagar">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
