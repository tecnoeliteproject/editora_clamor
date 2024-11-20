<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicoResource\RelationManagers\ObservacaosRelationManager;
use App\Filament\Resources\ServicoResource\Pages;
use App\Filament\Resources\ServicoResource\RelationManagers;
use App\Filament\Resources\ServicoResource\RelationManagers\ObservacaosRelationManager as RelationManagersObservacaosRelationManager;
use App\Models\Servico;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Barryvdh\DomPDF\Facade\Pdf;

class ServicoResource extends Resource
{
    protected static ?string $model = Servico::class;

    protected static ?string $navigationIcon = 'heroicon-s-rectangle-group';
    protected static ?string $modelLabel = 'Serviços';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nome')
                    ->required(),
                Select::make('estado')
                    ->label('Disponibilidade')
                    ->options([
                        1 => 'Disponível',
                        0 => 'Indisponível'
                ]),

                MarkdownEditor::make('descricao')
                    ->nullable()
                    ->columnSpanFull(),
                FileUpload::make('imagem')->nullable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable(),
                TextColumn::make('nome')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('imagem')
                    ->toggleable(),
                IconColumn::make('estado')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->headerActions([
                Action::make('Imprimir Relatório')
                ->icon('heroicon-o-printer')
                ->color('primary')
                ->action(function () {
                    // Gera o PDF diretamente
                    $servicos = Servico::with('observacaos')->get(); // Inclua as observações relacionadas

                    $pdf = Pdf::loadView('relatorios.servicos', ['servicos' => $servicos]);
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'relatorio-servicos.pdf'
                    );
                }),
            ])






            ->filters([
                TernaryFilter::make('estado')->label('Disponível?'),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()->label('Eliminar'),
                Tables\Actions\EditAction::make()->label('Editar'),
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
           ObservacaosRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicos::route('/'),
            'create' => Pages\CreateServico::route('/create'),
            'edit' => Pages\EditServico::route('/{record}/edit'),
        ];
    }
}
