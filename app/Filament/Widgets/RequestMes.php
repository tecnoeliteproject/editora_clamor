<?php

namespace App\Filament\Widgets;

use App\Models\ServiceRequest;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class RequestMes extends ChartWidget
{
    protected static ?string $heading = 'Serviços Solicitados por Ano e Mês';

    protected function getData(): array
    {
        // Consulta para contar os serviços por ano e mês
        $dados = ServiceRequest::select(
                DB::raw("DATE_FORMAT(created_at, '%Y-%m') as mes_ano"),
                DB::raw('count(id) as total')
            )
            ->groupBy('mes_ano')
            ->orderBy('mes_ano')
            ->get();

        // Separando os dados para o gráfico
        $labels = $dados->pluck('mes_ano')->toArray();
        $values = $dados->pluck('total')->toArray();

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Total de Solicitações',
                    'data' => $values,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Tipo de gráfico (pode ser 'line', 'bar', 'pie' etc.)
    }
}
