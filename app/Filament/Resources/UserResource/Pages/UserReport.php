<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class UserReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-report';

    protected static ?string $navigationGroup = 'Relatórios'; // Exibe em uma seção chamada "Relatórios"

    protected static string $view = 'filament.pages.user-report';

    public function downloadReport()
    {
        return redirect()->route('generate.user.report');
    }
}

