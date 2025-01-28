<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.4;
            margin: 20px;
        }
        .header, .footer {
            text-align: center;
            width: 100%;
            position: fixed;
        }
        .header {
            top: 0;
            margin-bottom: 50px;
        }
        .footer {
            bottom: 0;
        }
        .content {
            margin-top: 120px;
            margin-bottom: 100px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .signature {
            margin-top: 50px;
            text-align: left;
        }
        .signature-line {
            margin-top: 40px;
            border-top: 1px solid #000;
            width: 200px;
            align: center;
        }
        h2{
            padding: 50px;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <div class="header">
       <!-- <img src="{{ public_path('images/logo.png') }}" alt="Logotipo" style="height: 50px;"> -->
        <img src="../../images/home/1.jpg" alt="Logotipo" style="height: 50px;">
        <h1>Editora Clamor</h1>
        <p>Endereço: Joaquim Capango, Cuito - Bié, Angola</p>
        <p>Contato: (+244) 939 748 361 | (+244) 923 000 000 | editoraclamor@gmail.com</p>
        <hr>
    </div>

    <!-- Conteúdo -->
    <div class="content">
        <h2 style="text-align: center">Relatório de Usuários</h2>
        <p>Gerado em: {{ date('d/m/Y H:i:s') }}</p>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Acesso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Rodapé -->
    <div class="footer">
        <div class="signature">
            <p>Fadília Adriano</p>
            <div class="signature-line"></div>
            <p>Assinatura</p>
        </div>
    </div>
</body>
</html>
