<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\ServicoResource\Pages;
use App\Models\Servico;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServicoResource extends Resource
{
    protected static ?string $model = Servico::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(2)
            ->schema([
                TextEntry::make('nome'),
                TextEntry::make('descricao'),
                TextEntry::make('estado')
                    ->label('Disponibilidade')
                    ->badge()
                    ->colors([
                        'success' => 'Ativo',
                        'danger' => 'Inativo',
                    ])
                    ->state(function (Servico $record) {
                        return $record->estado ? 'Ativo' : 'Inativo';
                    }),
                TextEntry::make('descricao')
                    ->columnSpanFull(),
                KeyValueEntry::make('preco')
                    ->label('Preços')
                    ->keyLabel('Quantidade de Paginas')
                    ->valueLabel('Preço')
                    ->state(function (Servico $record) {
                        $precos = $record->prices()->orderBy('quantidade_paginas', 'asc')->get();
                        $saida = [];

                        foreach ($precos as $preco) {
                            $saida['Até ' . $preco->quantidade_paginas] = 'Kz ' . $preco->price . '/pag';
                        }

                        return $saida;
                    }),

            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descricao')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('pricing'),
                Forms\Components\TextInput::make('imagem')
                    ->maxLength(255),
                Forms\Components\Toggle::make('estado')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descricao')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('imagem')
                //     ->searchable(),
                Tables\Columns\IconColumn::make('estado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicos::route('/'),
            'create' => Pages\CreateServico::route('/create'),
            'view' => Pages\ViewServico::route('/{record}'),
            'edit' => Pages\EditServico::route('/{record}/edit'),
        ];
    }
}
