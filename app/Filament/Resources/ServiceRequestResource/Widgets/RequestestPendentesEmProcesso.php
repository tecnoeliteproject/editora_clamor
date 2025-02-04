<?php

namespace App\Filament\Resources\ServiceRequestResource\Widgets;

use App\Models\ServiceRequest;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RequestestPendentesEmProcesso extends BaseWidget 
{

    protected function getTableHeading(): string
{
    return 'Solicitações Pendentes e em Andamento';
}
    protected function getTableQuery(): Builder
    {
        return ServiceRequest::query()->whereIn('status', ['pendente', 'em andamento']);
    }


    protected function getTableColumns(): array
    {
        // Define as colunas da tabela
        return [
            Tables\Columns\TextColumn::make('servico.nome')->label('Serviço'),
            //Tables\Columns\TextColumn::make('user.name')->label('Cliente'),
            Tables\Columns\TextColumn::make('status')
                ->label('Estado')
                ->formatStateUsing(fn(string $state): string => ucfirst($state))
                ->badge()
                ->color(fn(string $state): string => match ($state) {
                    'pendente' => 'warning',
                    'em andamento' => 'info',
                    'finalizada' => 'success',
                    'cancelada' => 'danger',
                }),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Data de criação')
                ->dateTime('d/m/Y H:i'),
        ];

    }


    protected function getTableActions(): array
    {
        // Define as ações da tabela (opcional)
        return [
            
        ];
    }

    protected function getTableFilters(): array
    {
        // Define os filtros da tabela (opcional)
        return [
            Tables\Filters\Filter::make('status')
                ->query(fn(Builder $query) => $query->whereIn('status', ['pendente'])),
        ];
    }

    protected function getTableHeaderActions(): array
    {
        // Define as ações no cabeçalho da tabela (opcional)
        return [
            
        ];
    }

}
