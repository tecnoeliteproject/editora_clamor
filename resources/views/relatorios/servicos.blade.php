<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Serviços</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Relatório de Serviços</h1>
    <table>
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Descrição</th>
                <th>Observação</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicos as $servico)
                <tr>
                    <td rowspan="{{ $servico->observacaos->count() }}">{{ $servico->nome }}</td>
                    <td rowspan="{{ $servico->observacaos->count() }}">{{ $servico->descricao }}</td>
                    @foreach ($servico->observacaos as $key => $observacao)
                        @if ($key > 0) <tr> @endif
                        <td>{{ $observacao->observacao }}</td>
                        <td>{{ number_format($observacao->pivot->preco, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>
