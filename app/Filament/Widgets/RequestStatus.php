<?php

namespace App\Filament\Widgets;

use App\Models\ServiceRequest;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class RequestStatus extends ChartWidget
{
    protected static ?string $heading = 'Serviços Solicitados por Estado';

    protected function getData(): array
    {
        // Consulta para contar os serviços agrupados por estado
        $dados = ServiceRequest::select(
                'status', // Estado do serviço
                DB::raw('count(id) as total') // Contagem de serviços por estado
            )
            ->groupBy('status') // Agrupar por estado
            ->orderBy('status') // Ordem dos estados
            ->get();

        // Separando os dados para o gráfico
        $labels = $dados->pluck('status')->toArray();
        $values = $dados->pluck('total')->toArray();

        // Cores para os setores do gráfico de pizza
        $colors = [
            'pendente' => 'rgba(255, 159, 64, 0.5)', // Cor para "pendente"
            'em andamento' => 'rgba(54, 162, 235, 0.5)', // Cor para "em andamento"
            'finalizada' => 'rgba(75, 192, 192, 0.5)', // Cor para "finalizada"
            'cancelada' => 'rgba(255, 99, 132, 0.5)', // Cor para "cancelada"
        ];

        // Criando as cores dinamicamente conforme o estado
        $backgroundColors = array_map(function ($status) use ($colors) {
            return $colors[$status] ?? 'rgba(255, 99, 132, 0.5)'; // Default caso não tenha cor definida
        }, $labels);

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Total de Solicitações por Estado',
                    'data' => $values,
                    'backgroundColor' => $backgroundColors, // Cores dinâmicas para os estados
                    'borderColor' => 'rgba(0, 0, 0, 0.1)', // Cor da borda
                    'borderWidth' => 1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie'; // Tipo de gráfico (agora é 'pie')
    }
}
