<div>
    <form wire:submit="create">
        {{ $this->form }}

        <br>
        <x-filament::button wire:click="create">
            Completar cadastro
        </x-filament::button>
    </form>

    <x-filament-actions::modals />
</div>
