<?php

namespace App\Livewire;

use App\Models\PerfilCliente;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Carbon\Carbon; 

class CompleteSignupForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
    ->columns(2)
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
    ]),
Grid::make()
    ->columns(2)
    ->schema([
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
    ]),
Grid::make()
    ->columns(2)
    ->schema([
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
    ]),
Grid::make()
    ->columns(2)
    ->schema([
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
    ]),
Grid::make()
    ->columns(2)
    ->schema([
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
        TextInput::make('morada')
            ->required()
            ->regex('/^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s.,-]+$/')
            ->validationMessages([
                'regex' => 'A morada deve conter apenas letras, números, espaços e caracteres especiais (.,-).',
            ]),
    ]),
FileUpload::make('copia_bilhete')
    ->label('Copia do Bilhete de Identidade (PDF)')
    ->acceptedFileTypes(['application/pdf'])
    // ->required()
    ->directory('bilhetes'),
                 
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $data = $this->form->getState();
        // dd($data);

        PerfilCliente::create([
            'user_id' => auth()->user()->id,
            'nivel_academico' => $data['nivel_academico'],
            'bi' => $data['bi'],
            'telefone' => $data['telefone'],
            'data_nascimento' => $data['data_nascimento'],
            'nacionalidade' => $data['nacionalidade'],
            'provincia' => $data['provincia'],
            'municipio' => $data['municipio'],
            'morada' => $data['morada'],
            'copia_bilhete' => $data['copia_bilhete'],
            'genero' => $data['genero'],
            'estado_civil' => $data['estado_civil'],
        ]);

        redirect()->intended(Filament::getUrl());
    }

    public function render()
    {
        return view('livewire.complete-signup-form');
    }
}
