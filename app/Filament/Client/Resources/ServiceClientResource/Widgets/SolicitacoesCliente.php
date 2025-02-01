<?php

namespace App\Filament\Client\Resources\ServiceClientResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\ServiceRequest;
use Filament\Support\Enums\IconPosition;

class SolicitacoesCliente extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Solicitações', ServiceRequest::query()
                ->where('user_id', auth()->id()) // Filtra pelo ID do usuário logado
                ->count())
                ->description('Serviços Solicitados')
                ->descriptionIcon('heroicon-o-rectangle-stack', IconPosition::Before)
                ->chart([7, 2, 18, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
