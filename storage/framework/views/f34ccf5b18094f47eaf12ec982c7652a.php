<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'channel',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'channel',
]); ?>
<?php foreach (array_filter(([
    'channel',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    x-data="{}"
    x-init="
        window.addEventListener('EchoLoaded', () => {
            window.Echo.private(<?php echo \Illuminate\Support\Js::from($channel)->toHtml() ?>).notification((notification) => {
                setTimeout(() => $wire.handleBroadcastNotification(notification), 500)
            })
        })

        if (window.Echo) {
            window.dispatchEvent(new CustomEvent('EchoLoaded'))
        }
    "
    <?php echo e($attributes); ?>

></div>
<?php /**PATH C:\Users\HP PROBOOK\Documents\editoraClamor\vendor\filament\notifications\src\/../resources/views/components/echo.blade.php ENDPATH**/ ?>