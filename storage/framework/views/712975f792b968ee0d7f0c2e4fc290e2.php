<!--[if BLOCK]><![endif]--><?php if(filament()->hasUnsavedChangesAlerts()): ?>
        <?php
        $__scriptKey = '3935768913-0';
        ob_start();
    ?>
        <script>
            window.addEventListener('beforeunload', (event) => {
                if (
                    [
                        ...(<?php echo \Illuminate\Support\Js::from($this instanceof \Filament\Actions\Contracts\HasActions)->toHtml() ?> ? $wire.mountedActions ?? [] : []),
                        ...(<?php echo \Illuminate\Support\Js::from($this instanceof \Filament\Forms\Contracts\HasForms)->toHtml() ?>
                            ? $wire.mountedFormComponentActions ?? []
                            : []),
                        ...(<?php echo \Illuminate\Support\Js::from($this instanceof \Filament\Infolists\Contracts\HasInfolists)->toHtml() ?> ? $wire.mountedInfolistActions ?? [] : []),
                        ...(<?php echo \Illuminate\Support\Js::from($this instanceof \Filament\Tables\Contracts\HasTable)->toHtml() ?>
                            ? [
                                  ...($wire.mountedTableActions ?? []),
                                  ...($wire.mountedTableBulkAction
                                      ? [$wire.mountedTableBulkAction]
                                      : []),
                              ]
                            : []),
                    ].length
                ) {
                    event.preventDefault()
                    event.returnValue = true

                    return
                }
            })
        </script>
        <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\Users\HP PROBOOK\Documents\editoraClamor\vendor\filament\filament\src\/../resources/views/components/unsaved-action-changes-alert.blade.php ENDPATH**/ ?>