<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function generateReport()
    {
        // Dados que serão enviados para a view
        $data = [
            'title' => 'Relatório de Exemplo',
            'date' => date('d/m/Y'),
            'content' => 'Este é o conteúdo do relatório gerado pelo DomPDF.'
        ];

        // Renderizar a view e gerar o PDF
        $pdf = Pdf::loadView('reports.example', $data);

        // Baixar o PDF
        return $pdf->download('relatorio-exemplo.pdf');
    }
}
