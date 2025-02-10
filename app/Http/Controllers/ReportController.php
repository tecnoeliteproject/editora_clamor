<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use App\Models\PerfilCliente;

class ReportController extends Controller
{
    public function generateReport($userId)
    {
        // Buscar o usuário pelo ID
        $user = User::findOrFail($userId);

        // Buscar o perfil do cliente relacionado ao usuário
        $perfilCliente = PerfilCliente::where('user_id', $userId)->first();

        
        // Dados que serão enviados para a view
        $data = [
            'title' => 'Contrato de Serviço',
            'date' => date('d/m/Y'),
            'cliente' => $user,
            'perfilCliente' => $perfilCliente,
            'servicos' => 'Serviço de Publicação', // Exemplo de serviço
            'valor' => '5000', // Exemplo de valor
            'usuario_responsavel' => 'Responsável Teste', // Exemplo de responsável
        ];

        // Renderizar a view e gerar o PDF
        $pdf = Pdf::loadView('reports.contrato', $data);

        // Baixar o PDF
        return $pdf->download('contrato-servico.pdf');
    }
}