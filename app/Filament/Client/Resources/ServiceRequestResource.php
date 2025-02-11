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
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
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

    protected static ?string $label = 'Solicitar serviço';

    protected static ?string $navigationLabel = 'Solicitar serviço';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('servico.nome')
                    ->label('Serviço'),
                TextEntry::make('status')
                    ->label('Estado'),
                TextEntry::make('quantidade_paginas')
                    ->label('Número de Páginas'),
                TextEntry::make('preco.price')
                    ->label('Pacote')
                    ->state(function (ServiceRequest $record) {
                        return 'Kz ' . number_format($record->preco->price, 2, ',', '.') . '/pag';
                    }),
                TextEntry::make('total_a_pagar')
                    ->label('Total a Pagar')
                    ->state(function (ServiceRequest $record) {
                        $preco = $record->preco->price;
                        $quantidade_paginas = $record->quantidade_paginas;

                        return 'Kz ' . number_format($preco * $quantidade_paginas, 2, ',', '.');
                    }),
                TextEntry::make('observacoes')
                    ->label('Observações'),
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('servico')
                    ->label('Serviço')
                    ->options(Servico::all()->pluck('nome', 'id'))
                    ->live()
                    ->default(1)
                    ->required()
                    ->hidden(function ($get) {
                        return $get('status') === 'em andamento';
                    }),
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
                    ->required()
                    ->hidden(function ($get) {
                        return $get('status') === 'em andamento';
                    }),
                TextInput::make('pacote')
                    ->label('Pacote')
                    ->disabled()
                    ->hidden(function ($get) {
                        return $get('status') === 'em andamento';
                    }),
                TextInput::make('total_a_pagar')
                    ->label('Total a Pagar')
                    ->disabled()
                    ->hidden(function ($get) {
                        return $get('status') === 'em andamento';
                    }),
                Forms\Components\Textarea::make('observacoes')
                    ->columnSpanFull()
                    ->hidden(function ($get) {
                        return $get('status') === 'em andamento';
                    }),
                FileUpload::make('documento')
                    ->required()
                    ->label('Documento')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(2048)
                    ->directory('documentos-service-requests')
                    ->hidden(function ($get) {
                        return $get('status') === 'em andamento';
                    }),
                FileUpload::make('comprovativo_pagamento_url')
                    ->required()
                    ->label('Comprovativo de Pagamento')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(2048)
                    ->directory('documentos-service-requests')
                    ->hidden(function ($get) {
                        return $get('status') !== 'em andamento';
                    }),
                FileUpload::make('contrato_url')
                    ->required()
                    ->label('Contrato Assinado')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(2048)
                    ->directory('documentos-service-requests')
                    ->hidden(function ($get) {
                        return $get('status') !== 'em andamento';
                    }),
                FileUpload::make('documento_final_url')
                    ->required()
                    ->label('Documento Final')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(2048)
                    ->directory('documentos-service-requests')
                    ->hidden(function ($get) {
                        return $get('status') !== 'em andamento';
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(ServiceRequest::query()->where('user_id', auth()->id()))
            ->columns([
                TextColumn::make('id')
                ->label('ID')
                    ->sortable(),
                TextColumn::make('servico.nome')
                ->label('Serviço')
                    ->sortable(),
                TextColumn::make('quantidade_paginas')
                ->label('Páginas')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Preço Total')
                    ->searchable()
                    ->state(function (ServiceRequest $record) {
                        $precoTotal = $record->preco->price;
                        return number_format($precoTotal, 2, ',', '.') . ' Kz' . '/pag';
                    })
                    ->money('AOA', true),
                TextColumn::make('preco_total')
                    ->label('Preço Total')
                    ->searchable()
                    ->state(function (ServiceRequest $record) {
                        $precoTotal = $record->quantidade_paginas * $record->preco->price;
                        return number_format($precoTotal, 2, ',', '.') . ' Kz ' ;
                    })
                    ->money('AOA', true),
                TextColumn::make('status')
                    ->label('Estado')
                    ->formatStateUsing(fn(string $state): string => ucfirst($state))
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pendente' => 'warning',
                        'em andamento' => 'info',
                        'finalizada' => 'success',
                        'cancelada' => 'danger',
                    }),
                TextColumn::make('deleted_at')
                ->label('Data de Eliminação')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                ->label('Data de Criação')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                ->label('Data de Actualização')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('download_contrato')
                    ->label('Baixar Contrato')
                    ->icon('heroicon-o-document')
                    ->color('info')
                    ->hidden(fn(ServiceRequest $record) => $record->status !== 'em andamento') // Somente visível se estiver pago
                    ->url(fn(ServiceRequest $record) => route('contracts.contract', $record->id))
                    ->openUrlInNewTab(),
                    Tables\Actions\Action::make('download_fatura')
                    ->label('Fatura')
                    ->icon('heroicon-o-document')
                    ->color('success')
                    ->hidden(fn(ServiceRequest $record) => $record->status !== 'finalizada') // Somente visível se estiver pago
                    ->url(fn(ServiceRequest $record) => route('invoices.invoice', $record->id))
                    ->openUrlInNewTab(),
                    Tables\Actions\EditAction::make()
                    ->label('Editar')
                    ->icon('heroicon-o-pencil')
                    ->color('warning')
                    ->hidden(fn(ServiceRequest $record) => $record->status === 'finalizada'),
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
