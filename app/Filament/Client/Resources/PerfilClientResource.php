<?php
namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\PerfilClientResource\Pages;
use App\Models\PerfilCliente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;


class PerfilClientResource extends Resource
{
    protected static ?string $model = PerfilCliente::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static ?string $navigationLabel = 'Meu Perfil';

    public static function shouldRegisterNavigation(): bool
    {
        // Exibe o recurso no menu apenas se o usuário estiver logado e tiver um perfil
        return auth()->check() && PerfilCliente::where('user_id', auth()->id())->exists();
        
    }

    public static function getNavigationUrl(): string
    {
        // Redireciona diretamente para a página de edição
        return static::getUrl();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bi')
                    ->label('NIF/BI')
                    ->required(),
                Forms\Components\TextInput::make('telefone')
                    ->required(),
                Forms\Components\DatePicker::make('data_nascimento')
                    ->label('Data de Nascimento')
                    ->required(),
                Forms\Components\TextInput::make('nacionalidade')
                    ->default('Angolana')
                    ->required(),
                Forms\Components\TextInput::make('provincia')
                    ->required(),
                Forms\Components\TextInput::make('municipio')
                    ->required(),
                Forms\Components\TextInput::make('morada')
                    ->required(),
                Forms\Components\Select::make('genero')
                    ->options([
                        'masculino' => 'Masculino',
                        'feminino' => 'Feminino',
                    ])
                    ->required(),
                Forms\Components\Select::make('estado_civil')
                    ->options([
                        'solteiro' => 'Solteiro(a)',
                        'casado' => 'Casado(a)',
                        'divorciado' => 'Divorciado(a)',
                        'viuvo' => 'Viuvo(a)',
                    ])
                    ->required(),
                Forms\Components\Select::make('nivel_academico')
                    ->options([
                        'Básico' => 'Básico',
                        'Médio' => 'Médio',
                        'Licenciado' => 'Licenciado',
                        'Mestre' => 'Mestre',
                        'PhD' => 'PhD',
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('copia_bilhete')
                    ->label('Cópia do Bilhete de Identidade (PDF)')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('bilhetes'),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        // Verifica se o perfil do usuário logado já existe
        $perfil = PerfilCliente::where('user_id', auth()->id())->first();
    
        // Retorna a query filtrada pelo perfil do usuário logado
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Nome'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPerfilClients::route('/'), // Página de listagem
            'edit' => Pages\EditPerfilClient::route('/{record}/edit'), // Página de edição
        ];
    }
}
