<x-mail::message>
Novo Pedido de Contacto

<x-mail::panel>
@foreach ($fields as $item)
<strong>{{ $item['display'] }}:</strong> {{ $item['value'] }}<br>
@endforeach
</x-mail::panel>
</x-mail::message>
