@component('mail::message')
# {{$user->name}}

{{$new_arrival->body}}

Atenciosamente,<br>
<div style="display: block;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
">
    <img style="width:40%; height: 40%;" src="{{ URL::to('/images/logo4.png') }}" class="logo img-fluid">

</div>
@endcomponent
