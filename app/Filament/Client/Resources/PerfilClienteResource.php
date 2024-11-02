<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\PerfilClienteResource\Pages;
use App\Filament\Client\Resources\PerfilClienteResource\RelationManagers;
use App\Models\PerfilCliente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;


class PerfilClienteResource extends Resource
{
    protected static ?string $model = PerfilCliente::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public $user;

    public function mount()
    {
        // Carrega os dados do usuário autenticado
        $this->user = Auth::user();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')
                    ->default(Auth::user()->id)
                    ->label('Usuário')
                    ->hidden(false)
                    ->required(),

                TextInput::make('nome')
                    ->label('Nome')
                    ->required(),

                TextInput::make('sobrenome')
                    ->label('Sobrenome')
                    ->required(),

                Select::make('nivel_academico')
                    ->label('Nível Acadêmico')
                    ->options([
                        'fundamental' => 'Fundamental',
                        'medio' => 'Médio',
                        'Licenciado' => 'Licenciado',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPerfilClientes::route('/'),
            //'create' => Pages\CreatePerfilCliente::route('/create'),
            'edit' => Pages\EditPerfilCliente::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }


}
