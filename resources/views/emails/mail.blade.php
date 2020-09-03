@component('mail::message')

# {{ $detalhes['body'] }} {{ $detalhes['plano']}}.

<p>Número para contato: {{$detalhes['number']}}.</p>

<p>Atenciosamente,</p>
{{$detalhes['fullName']}}
@endcomponent

