<?php
namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\PerfilClientResource\Pages;
use App\Models\PerfilCliente;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;
use Carbon\Carbon; 


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
                TextInput::make('bi')
                    ->label('NIF/BI')
                    ->length(14)
                    ->required()
                    ->regex('/^\d{9}[A-Z]{2}\d{3}$/')
                    ->validationMessages([
                        'regex' => 'O NIF/BI deve ter 14 caracteres: 9 dígitos, 2 letras maiúsculas e 3 dígitos.',
                    ]),
                TextInput::make('telefone')
                    ->required()
                    ->regex('/^9\d{8}$/')
                    ->validationMessages([
                        'regex' => 'O número de telefone deve ter 9 dígitos e começar com 9.',
                    ]),
                DatePicker::make('data_nascimento')
                    ->label('Data de Nascimento')
                    ->native(false)
                    ->hint('Ex: 01/01/2000')
                    ->required()
                    ->rules([
                        'before:' . Carbon::now()->subYears(6)->format('Y-m-d'), // Valida que a data é anterior a 6 anos atrás
                    ])
                    ->validationMessages([
                        'before' => 'O cliente deve ter pelo menos 6 anos de idade.',
                    ]),
                TextInput::make('nacionalidade')
                    ->default('Angolana')
                    ->required()
                    ->regex('/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/')
                    ->validationMessages([
                        'regex' => 'A nacionalidade deve conter apenas letras e espaços.',
                    ]),
                TextInput::make('provincia')
                    ->required()
                    ->regex('/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/')
                    ->validationMessages([
                        'regex' => 'O nome da província deve conter apenas letras e espaços.',
                    ]),
                TextInput::make('municipio')
                    ->required()
                    ->regex('/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/') 
                    ->validationMessages([
                        'regex' => 'O nome do município deve conter apenas letras e espaços.',
                    ]),
                TextInput::make('morada')
                    ->required()
                    ->regex('/^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s.,-]+$/')
                    ->validationMessages([
                        'regex' => 'A morada deve conter apenas letras, números, espaços e caracteres especiais (.,-).',
                    ]),
                Select::make('genero')
                    ->required()
                    ->options([
                        'masculino' => 'Masculino',
                        'feminino' => 'Feminino',
                    ])
                    ->default('masculino'),
                Select::make('estado_civil')
                    ->required()
                    ->options([
                        'solteiro' => 'Solteiro(a)',
                        'casado' => 'Casado(a)',
                        'divorciado' => 'Divorciado(a)',
                        'viuvo' => 'Viuvo(a)',
                    ])
                    ->default('solteiro'),
                Select::make('nivel_academico')
                    ->label('Nivel de Formação')
                    ->required()
                    ->options([
                        'Básico' => 'Básico',
                        'Médio' => 'Médio',
                        'Licenciado' => 'Licenciado',
                        'Mestre' => 'Mestre',
                        'PhD' => 'PhD',
                    ])
                    ->default('Médio'),
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
