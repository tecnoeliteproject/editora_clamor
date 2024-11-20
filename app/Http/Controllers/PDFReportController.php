<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;

class PDFReportController extends Controller
{
    public function generateUserReport()
    {
        try {
            // Verificar se há registros no banco
            $users = User::all();

            // Gerar o PDF usando a view
            $pdf = Pdf::loadView('relatorios.users', compact('users'));

            // Retornar o PDF para download
            return $pdf->download('relatorio_usuarios.pdf');
        } catch (\Exception $e) {
            // Logar e retornar erro
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

