<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\ServiceRequestResource\Pages;
use App\Filament\Client\Resources\ServiceRequestResource\RelationManagers;
use App\Models\Price;
use App\Models\ServiceRequest;
use App\Models\Servico;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceRequestResource extends Resource
{
    protected static ?string $model = ServiceRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('servico')
                    ->label('Serviço')
                    ->options(Servico::all()->pluck('nome', 'id'))
                    ->live()
                    ->default(1)
                    // ->native(false)
                    ->required(),
                // campo invisivel para armazenar o id do preco
                TextInput::make('preco_id')
                    ->hidden(),
                TextInput::make('num_paginas')
                    ->label('Número de Páginas')
                    ->live()
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                        $precos = Price::where('servico_id', $get('servico'));

                        if ($state) {
                            if ($state > 250) {
                                $valor = $precos->orderBy('quantidade_paginas', 'desc')->first()->price;
                                $set('pacote', 'Kz ' . $valor . ' por páginas');
                                $set('total_a_pagar', number_format($valor * $state, 2, ',', '.'));
                                return;
                            } else {
                                $preco = $precos->where('quantidade_paginas', '>=', $state)->first();
                                $set('preco_id', $preco->id);
                                $set('pacote', 'Kz ' . $preco->price . ' por páginas');

                                $set('total_a_pagar', number_format($preco->price * $state, 2, ',', '.'));
                            }
                        }
                    })
                    ->required(),
                TextInput::make('pacote')
                    ->label('Pacote')
                    ->disabled(),
                TextInput::make('total_a_pagar')
                    ->label('Total a Pagar')
                    ->disabled(),
                // Select::make('servico_price')
                //     ->label('Pacote')
                //     ->native(false)
                //     ->options(function (Get $get) {
                //         $prices = Price::where('servico_id', $get('servico'));

                //         $output = [];
                //         foreach ($prices->get() as $value) {
                //             $output[] = 'Até ' . $value->quantidade_paginas . ' Pagínas' . ' - Kz ' . number_format($value->price, 2, ',', '.') . '/pag';
                //         }

                //         return $output;
                //     })
                //     ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                //         if ($old !== $state) {
                //             $set('pacote', null);
                //         }

                //         return;
                //     })
                //     ->required(),
                Forms\Components\Textarea::make('observacoes')
                    ->columnSpanFull(),
                FileUpload::make('comprovativo_pagamento')
                    ->required()
                    ->label('Comprovativo de Pagamento')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(2048)
                    ->directory('comprovativos-de-pagamento-service-requests'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('servico.nome')
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantidade_paginas'),
                Tables\Columns\TextColumn::make('price')
                    ->label('Preço Total')
                    ->searchable()
                    ->state(function (ServiceRequest $record) {
                        $precoTotal = $record->preco->price;
                        return 'Kz ' . number_format($precoTotal, 2, ',', '.') . '/pag';
                    })
                    ->money('AOA', true),
                Tables\Columns\TextColumn::make('preco_total')
                    ->label('Preço Total')
                    ->searchable()
                    ->state(function (ServiceRequest $record) {
                        $precoTotal = $record->quantidade_paginas * $record->preco->price;
                        return 'Kz ' . number_format($precoTotal, 2, ',', '.');
                    })
                    ->money('AOA', true),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListServiceRequests::route('/'),
            'create' => Pages\CreateServiceRequest::route('/create'),
            'view' => Pages\ViewServiceRequest::route('/{record}'),
            'edit' => Pages\EditServiceRequest::route('/{record}/edit'),
        ];
    }
}
