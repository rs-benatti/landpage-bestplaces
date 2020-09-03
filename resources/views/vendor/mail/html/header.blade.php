<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img class="svg" src="{{ url('/img/Logomarca - Best Places.svg') }}"></img>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
