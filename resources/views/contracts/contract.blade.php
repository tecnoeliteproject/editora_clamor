<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contrato</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header { text-align: center; }
        .content { margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: left; }
        .total { text-align: right; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="header">
        
        <img src="C:\Users\Surface\Documents\dev\editora_clamor\public\images\icon-4.png" alt="Logo da Empresa">
        
        <h1>Contrato de Serviço</h1>
    </div>
    <div class="content">
        <p><strong>Cliente:</strong> {{ $cliente->name }}</p>
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        <p><strong>Responsável:</strong> {{ $usuario_responsavel }}</p>


        <table>
            <thead>
                <tr>
                    <th>Serviço</th>
                </tr>
            </thead>
            <tbody>
            
             <tr>
                        <td>{{ $servicos}}</td>
                    </tr>
            
                
            </tbody>
        </table>
    </div>
</body>
</html>
