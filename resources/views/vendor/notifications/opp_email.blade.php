<x-mail::message>
Novo Pedido de Opurtunidade

<x-mail::panel>
@foreach ($fields as $item)
    @if ($item['display'] == 'Curriculum Vitae')
        <strong>{{ $item['display'] }}:</strong> {{ basename($item['value']) }}<br>
    @else
        <strong>{{ $item['display'] }}:</strong> {{ $item['value'] }}<br>
    @endif
@endforeach
</x-mail::panel>
</x-mail::message>
