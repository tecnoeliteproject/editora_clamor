<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Factura</title>
    <style>
        /* Estilos anteriores... */
    </style>
</head>
<body>
    <div class="header">
        <img src="C:\Users\Surface\Documents\dev\editora_clamor\public\images\logo.png" alt="Logo da Empresa"   style="height: 100px;">
        <h1>Factura</h1>
    </div>
    <div class="content">
        <p><strong>Cliente:</strong> {{ $cliente->name }}</p>
        @if(isset($perfilCliente))
        <p><strong>Número de Telefone:</strong> {{ $perfilCliente->telefone }}</p>
        @else
            <p><strong>Erro:</strong> Perfil do cliente não encontrado.</p>
        @endif
        <p><strong>Data da Fatura:</strong> {{ $date }}</p>

        <h2>Detalhes do Serviço</h2>
        <table>
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $servicos }}</td>
                    <td>Kz 400</td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            <p><strong>Total a Pagar:</strong> Kz 400</p>
        </div>

               <div class="signature-section">
            

            <p><strong>O Responsável</strong></p>
            <p>_________________________________________</p>
            <p></p>
            <p>Data: {{ $date }}</p>
        </div>
    </div>

    <div class="footer">
        <p>Editora Clamor &copy; {{ date('Y') }}. Todos os direitos reservados.</p>
    </div>
</body>
</html>