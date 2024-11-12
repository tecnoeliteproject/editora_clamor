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
    public $perfilClient;

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
                        'Básico' => 'Básico',
                        'Médio' => 'Médio',
                        'Licenciado' => 'Licenciado',
                        'Mestre' => 'Mestre',
                        'PhD' => 'PhD',
                    ])
                    ->required(),
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
        $user = Auth::user();
  /*
        // Verifica se o perfil já existe para o cliente logado
        if ($user->perfilClient) {
            // Redireciona para o formulário de edição do perfil existente
            return ['index' => Pages\EditPerfilCliente::route('/{record}/edit')];
        } else {
            // Redireciona para o formulário de criação de um novo perfil
           return ['index' => Pages\CreatePerfilCliente::route('/')];
        }
   */
        return [
           // 'index' => Pages\ListPerfilClientes::route('/'),
            'index' => Pages\CreatePerfilCliente::route('/'),
            'edit' => Pages\EditPerfilCliente::route('/{record}/edit'),
        ];

    }



    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }


    public static function beforeCreate(Form $form, $record)
{
    // Atribui automaticamente o ID do usuário logado ao perfil
    $record->user_id = auth()->id();
}

public static function beforeSave(Form $form, $record)
{
    // Garante que o ID do usuário logado esteja no perfil durante edições
    if (empty($record->user_id)) {
        $record->user_id = auth()->id();
    }
}

}
