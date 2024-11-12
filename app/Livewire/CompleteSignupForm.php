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
                            ->required(),
                        TextInput::make('telefone')
                            ->required(),
                    ]),
                Grid::make()
                    ->columns(2)
                    ->schema([
                        DatePicker::make('data_nascimento')
                            ->label('Data de Nascimento')
                            ->native(false)
                            ->hint('Ex: 01/01/2000')
                            ->required(),
                        TextInput::make('nacionalidade')
                            ->default('Angolana')
                            ->required(),
                    ]),
                Grid::make()
                    ->columns(2)
                    ->schema([
                        TextInput::make('provincia')
                            ->required(),
                        TextInput::make('municipio')
                            ->required(),
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
                            ->required(),
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
