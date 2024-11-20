<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Barryvdh\DomPDF\Facade\Pdf;

class RelatorioServicoController extends Controller
{
    public function gerarRelatorio()
    {
        $servicos = Servico::with(['observacoes'])->get();

        $pdf = Pdf::loadView('relatorios.servicos', compact('servicos'))
                  ->setPaper('a4', 'landscape');

        return $pdf->stream('relatorio_servicos.pdf'); // Exibe o PDF no navegador
    }
}

