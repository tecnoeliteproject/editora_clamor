<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicoResource\RelationManagers\ObservacaosRelationManager;
use App\Filament\Resources\ServicoResource\Pages;
use App\Models\Servico;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ServicoResource extends Resource
{
    protected static ?string $model = Servico::class;

    protected static ?string $navigationIcon = 'heroicon-s-rectangle-group';
    protected static ?string $modelLabel = 'Servicos';

    protected static ?string $navigationLabel = 'Serviços';
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
                ->label('ID')
                    ->sortable(),
                TextColumn::make('nome')
                ->label('Serviço')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('estado')
                    ->boolean()
                    ->searchable(),
                TextColumn::make('created_at')
                ->label('Data de Criação')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                ->label('Data de Actualização')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('estado')->label('Disponível?'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Editar')
                ->icon('heroicon-o-pencil')
                ->color('warning'),
            Tables\Actions\DeleteAction::make()
                ->label('Eliminar')
                ->icon('heroicon-o-trash')
                ->color('danger'),
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
            // ObservacaosRelationManager::class
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
