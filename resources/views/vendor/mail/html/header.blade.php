@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
    <img src="{{ $message->embed(public_path('images/logo.png')) }}" class="logo" alt="Mi Empresa">
@else
    {!! $slot !!}
@endif
</a>
</td>
</tr>
