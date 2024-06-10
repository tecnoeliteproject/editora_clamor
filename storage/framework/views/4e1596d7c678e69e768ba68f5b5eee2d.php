<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'isGrid' => true,
    'default' => 1,
    'direction' => 'row',
    'sm' => null,
    'md' => null,
    'lg' => null,
    'xl' => null,
    'twoXl' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'isGrid' => true,
    'default' => 1,
    'direction' => 'row',
    'sm' => null,
    'md' => null,
    'lg' => null,
    'xl' => null,
    'twoXl' => null,
]); ?>
<?php foreach (array_filter(([
    'isGrid' => true,
    'default' => 1,
    'direction' => 'row',
    'sm' => null,
    'md' => null,
    'lg' => null,
    'xl' => null,
    'twoXl' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    <?php echo e($attributes
            ->class([
                'grid' => $isGrid && $direction === 'row',
                'grid-cols-[--cols-default]' => $default && ($direction === 'row'),
                'columns-[--cols-default]' => $default && ($direction === 'column'),
                'sm:grid-cols-[--cols-sm]' => $sm && ($direction === 'row'),
                'sm:columns-[--cols-sm]' => $sm && ($direction === 'column'),
                'md:grid-cols-[--cols-md]' => $md && ($direction === 'row'),
                'md:columns-[--cols-md]' => $md && ($direction === 'column'),
                'lg:grid-cols-[--cols-lg]' => $lg && ($direction === 'row'),
                'lg:columns-[--cols-lg]' => $lg && ($direction === 'column'),
                'xl:grid-cols-[--cols-xl]' => $xl && ($direction === 'row'),
                'xl:columns-[--cols-xl]' => $xl && ($direction === 'column'),
                '2xl:grid-cols-[--cols-2xl]' => $twoXl && ($direction === 'row'),
                '2xl:columns-[--cols-2xl]' => $twoXl && ($direction === 'column'),
            ])
            ->style(
                match ($direction) {
                    'column' => [
                        "--cols-default: {$default}" => $default,
                        "--cols-sm: {$sm}" => $sm,
                        "--cols-md: {$md}" => $md,
                        "--cols-lg: {$lg}" => $lg,
                        "--cols-xl: {$xl}" => $xl,
                        "--cols-2xl: {$twoXl}" => $twoXl,
                    ],
                    'row' => [
                        "--cols-default: repeat({$default}, minmax(0, 1fr))" => $default,
                        "--cols-sm: repeat({$sm}, minmax(0, 1fr))" => $sm,
                        "--cols-md: repeat({$md}, minmax(0, 1fr))" => $md,
                        "--cols-lg: repeat({$lg}, minmax(0, 1fr))" => $lg,
                        "--cols-xl: repeat({$xl}, minmax(0, 1fr))" => $xl,
                        "--cols-2xl: repeat({$twoXl}, minmax(0, 1fr))" => $twoXl,
                    ],
                },
            )); ?>

>
    <?php echo e($slot); ?>

</div>
<?php /**PATH C:\Users\HP PROBOOK\Documents\editoraClamor\vendor\filament\support\src\/../resources/views/components/grid/index.blade.php ENDPATH**/ ?>