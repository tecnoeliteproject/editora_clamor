<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceRequestResource\Pages;
use App\Filament\Resources\ServiceRequestResource\RelationManagers;
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
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Joaopaulolndev\FilamentPdfViewer\Forms\Components\PdfViewerField;
use Filament\Tables\Actions\Action;

class ServiceRequestResource extends Resource
{
    protected static ?string $model = ServiceRequest::class;

    protected static ?string $label = 'Serviços solicitados';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('servico.nome')
                    ->label('Serviço'),
                TextEntry::make('status')
                    ->label('Status'),
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
                Select::make('service_id')
                    ->required()
                    ->label('Serviço')
                    ->options(Servico::all()->pluck('nome', 'id'))
                    ->live()
                    ->disabled(),
                Select::make('status')
                    ->label('Estado')
                    ->options([
                        'pendente' => 'Pendente',
                        'em andamento' => 'Em andamento',
                        'finalizada' => 'Finalizada',
                        'cancelada' => 'Cancelada',
                    ])
                    ->required(),
                TextInput::make('preco_id')
                    ->hidden(),
                TextInput::make('quantidade_paginas')
                    ->label('Número de Páginas')
                    ->required()
                    ->disabled()
                    ->hidden(function ($get) {
                        return $get('status') !== 'em andamento';
                    }),
                TextInput::make('pacote')
                    ->label('Pacote')
                    ->disabled()
                    ->hidden(function ($get) {
                        return $get('status') !== 'em andamento';
                    }),
                TextInput::make('total_a_pagar')
                    ->label('Total a Pagar')
                    ->disabled()
                    ->hidden(function ($get) {
                        return $get('status') !== 'em andamento';
                    }),
                Forms\Components\Textarea::make('observacoes')
                    ->columnSpanFull()
                    ->disabled()
                    ->hidden(function ($get) {
                        return $get('status') !== 'em andamento';
                    }),
                PdfViewerField::make('teste')
                    ->label('Documento Inicial')
                    ->fileUrl(function (ServiceRequest $record) {
                        return Storage::url($record->documento_url);
                    })
                    ->columnSpan(2)
                    ->minHeight('80svh'),
                    PdfViewerField::make('teste')
                    ->label('Comprovativo de Pagamento')
                    ->fileUrl(function (ServiceRequest $record) {
                        return Storage::url($record->comprovativo_pagamento_url);
                    })
                    ->columnSpan(2)
                    ->minHeight('80svh')
                    ->hidden(function ($get) {
                        return $get('status') === 'pendente';
                    }),
                    PdfViewerField::make('teste')
                    ->label('Contrato Assinado')
                    ->fileUrl(function (ServiceRequest $record) {
                        return Storage::url($record->contrato_url);
                    })
                    ->columnSpan(2)
                    ->minHeight('80svh')
                    ->hidden(function ($get) {
                        return $get('status') === 'pendente';
                    }),
                    PdfViewerField::make('teste')
                    ->label('Documento Final')
                    ->fileUrl(function (ServiceRequest $record) {
                        return Storage::url($record->documento_final_url);
                    })
                    ->columnSpan(2)
                    ->minHeight('80svh')
                    ->hidden(function ($get) {
                        return $get('status') === 'pendente';
                    }),
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
                Tables\Filters\TrashedFilter::make(),
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
                    ->hidden(fn(ServiceRequest $record) => $record->status === 'finalizada'),
                

            ])
            ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
