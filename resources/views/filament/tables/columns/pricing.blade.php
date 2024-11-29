@php
    $prices = $getState();
@endphp

@if ($prices)
    <table class="table-auto border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="px-2 py-1 border border-gray-200">Faixa</th>
                <th class="px-2 py-1 border border-gray-200">Preço (Kz)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prices as $range => $price)
                <tr>
                    <td class="px-2 py-1 border border-gray-200">{{ $range }}</td>
                    <td class="px-2 py-1 border border-gray-200">{{ number_format($price, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <span>Sem preços cadastrados</span>
@endif
