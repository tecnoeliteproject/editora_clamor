<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Serviço</title>
    <style>
        /* Estilos anteriores... */
    </style>
</head>
<body>
    <div class="header">
        <img src="C:\Users\Surface\Documents\dev\editora_clamor\public\images\logo.png" alt="Logo da Empresa"   style="height: 100px;">
        <h1>Contrato de Serviço</h1>
    </div>
    <div class="content">
        <p><strong>Cliente:</strong> {{ $cliente->name }}</p>
        @if(isset($perfilCliente))
            <p><strong>Número do Bilhete:</strong> {{ $perfilCliente->bi }}</p>
            <p><strong>Estado Civil:</strong> {{ $perfilCliente->estado_civil }}</p>
            <p><strong>Data de Nascimento:</strong> {{ date('d/m/Y', strtotime($perfilCliente->data_nascimento)) }}</p>
            <p><strong>Número de Telefone:</strong> {{ $perfilCliente->telefone }}</p>
        @else
            <p><strong>Erro:</strong> Perfil do cliente não encontrado.</p>
        @endif
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        <p><strong>Responsável:</strong> {{ $usuario_responsavel }}</p>
        <p><strong>Data do Contrato:</strong> {{ $date }}</p>

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

        <div class="clauses">
            <h2>Cláusulas do Contrato</h2>
            <p>1. O serviço será entregue após o prazo de <strong>1 mês</strong> a partir da data de assinatura deste contrato.</p>
            <p>2. A modalidade de pagamento é <strong>única</strong>, devendo ser efetuada no ato da contratação.</p>
            <p>3. O pagamento deve ser realizado para a conta da <strong>Editora Clamor</strong> com os seguintes dados:</p>
            <ul>
                <li><strong>Nome da Conta:</strong> Editora Clamor</li>
                <li><strong>IBAN:</strong> 0040.0000.0000.2379.3</li>
            </ul>
            <p>4. Em caso de atraso na entrega do serviço, o cliente será notificado e receberá um prazo adicional de 7 dias.</p>
        </div>

        <div class="signature-section">
            <h2>Assinaturas</h2>
            <p><strong>Cliente:</strong></p>
            <p>_________________________________________</p>
            <p>Nome: {{ $cliente->name }}</p>
            <p>Data: {{ $date }}</p>

            <p><strong>Directora da Editora Clamor:</strong></p>
            <p>_________________________________________</p>
            <p>Nome: Fadília Adriano</p>
            <p>Data: {{ $date }}</p>
        </div>
    </div>

    <div class="footer">
        <p>Editora Clamor &copy; {{ date('Y') }}. Todos os direitos reservados.</p>
    </div>
</body>
</html>