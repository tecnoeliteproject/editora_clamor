<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class UserReportController extends Controller
{
    public function generate()
    {
        // Obtendo os usuários do sistema
        $users = User::all();

        // Enviando os dados para a view do relatório
        $pdf = Pdf::loadView('reports.users', compact('users'));

        // Retornando o PDF para download
        return $pdf->download('relatorio-usuarios.pdf');
    }
}

