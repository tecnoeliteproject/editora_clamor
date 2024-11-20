<x-filament::page>
    <div class="space-y-4">
        <h2 class="text-lg font-bold">Relatório de Usuários</h2>
        <p>Clique no botão abaixo para gerar o relatório em PDF.</p>
        <a href="{{ route('generate.user.report') }}" target="_blank" class="filament-button filament-button-primary">
            Baixar Relatório
        </a>
    </div>
</x-filament::page>

