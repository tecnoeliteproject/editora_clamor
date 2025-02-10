<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\TabelaPrecoResource\Pages;
use App\Models\Price;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;

class TabelaPrecoResource extends Resource
{
    protected static ?string $model = Price::class;

    protected static ?string $label = 'Tabela de Preços';

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationLabel = 'Tabela de Preços';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultGroup('servico.nome')
            ->groups([
                Group::make('servico.nome')
                    ->label('Serviço')
                    ->collapsible(),
            ])
            ->paginationPageOptions([50])
            ->defaultSort('quantidade_paginas', 'asc')
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('price')
                    ->state(function (Price $record) {
                        return 'Kz ' . number_format($record->price, 2, ',', '.') . '/pag';
                    }),
                TextColumn::make('quantidade_paginas')
                    ->state(function (Price $record) {
                        return 'Até ' . $record->quantidade_paginas . ' paginas';
                    }),
                TextColumn::make('created_at')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTabelaPrecos::route('/'),
        ];
    }
}
