<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'circular' => true,
    'size' => 'md',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'circular' => true,
    'size' => 'md',
]); ?>
<?php foreach (array_filter(([
    'circular' => true,
    'size' => 'md',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<img
    <?php echo e($attributes
            ->class([
                'fi-avatar object-cover object-center',
                'rounded-md' => ! $circular,
                'fi-circular rounded-full' => $circular,
                match ($size) {
                    'sm' => 'h-6 w-6',
                    'md' => 'h-8 w-8',
                    'lg' => 'h-10 w-10',
                    default => $size,
                },
            ])); ?>

/>
<?php /**PATH C:\00\editoraClamor\vendor\filament\support\src\/../resources/views/components/avatar.blade.php ENDPATH**/ ?>