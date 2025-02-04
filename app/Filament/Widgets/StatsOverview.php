<?php

namespace App\Filament\Widgets;

use App\Models\ServiceRequest;
use App\Models\Servico;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Usuários', User::query()->count())
            ->description('Usuários do sistema')
            ->descriptionIcon('heroicon-o-user-group', IconPosition::Before)
            ->chart([7, 2, 18, 3, 15, 4, 17])
            ->color('warning'),
            Stat::make('Serviços', Servico::query()->count())
            ->description('Serviços da Editora')
            ->descriptionIcon('heroicon-s-rectangle-group', IconPosition::Before)
            ->chart([0,0,2,7,3,10])
            ->color('success'),
            Stat::make('Solicitações', ServiceRequest::query()->count())
            ->description('Serviços Solicitados')
            ->descriptionIcon('heroicon-s-rectangle-stack', IconPosition::Before)
            ->chart([20,0,2,7,3,10])
            ->color('danger'),
        ];
    }
}
