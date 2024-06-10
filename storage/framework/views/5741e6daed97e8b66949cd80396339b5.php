<?php
    use Filament\Support\Enums\IconSize;
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'color' => 'gray',
    'icon' => null,
    'iconSize' => IconSize::Medium,
    'tag' => 'div',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'color' => 'gray',
    'icon' => null,
    'iconSize' => IconSize::Medium,
    'tag' => 'div',
]); ?>
<?php foreach (array_filter(([
    'color' => 'gray',
    'icon' => null,
    'iconSize' => IconSize::Medium,
    'tag' => 'div',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<<?php echo e($tag); ?>

    <?php echo e($attributes
            ->class([
                'fi-dropdown-header flex w-full gap-2 p-3 text-sm',
                match ($color) {
                    'gray' => 'fi-color-gray',
                    default => 'fi-color-custom',
                },
                // @deprecated `fi-dropdown-header-color-*` has been replaced by `fi-color-gray` and `fi-color-custom`.
                is_string($color) ? "fi-dropdown-header-color-{$color}" : null,
            ])); ?>

>
    <?php if(filled($icon)): ?>
        <?php if (isset($component)) { $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'class' => \Illuminate\Support\Arr::toCssClasses([
                'fi-dropdown-header-icon',
                match ($iconSize) {
                    IconSize::Small, 'sm' => 'h-4 w-4',
                    IconSize::Medium, 'md' => 'h-5 w-5',
                    IconSize::Large, 'lg' => 'h-6 w-6',
                    default => $iconSize,
                },
                match ($color) {
                    'gray' => 'text-gray-400 dark:text-gray-500',
                    default => 'text-custom-500 dark:text-custom-400',
                },
            ]),'style' => \Illuminate\Support\Arr::toCssStyles([
                \Filament\Support\get_color_css_variables(
                    $color,
                    shades: [400, 500],
                    alias: 'dropdown.header.icon',
                ) => $color !== 'gray',
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                'fi-dropdown-header-icon',
                match ($iconSize) {
                    IconSize::Small, 'sm' => 'h-4 w-4',
                    IconSize::Medium, 'md' => 'h-5 w-5',
                    IconSize::Large, 'lg' => 'h-6 w-6',
                    default => $iconSize,
                },
                match ($color) {
                    'gray' => 'text-gray-400 dark:text-gray-500',
                    default => 'text-custom-500 dark:text-custom-400',
                },
            ])),'style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles([
                \Filament\Support\get_color_css_variables(
                    $color,
                    shades: [400, 500],
                    alias: 'dropdown.header.icon',
                ) => $color !== 'gray',
            ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $attributes = $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $component = $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
    <?php endif; ?>

    <span
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'fi-dropdown-header-label flex-1 truncate text-start',
            match ($color) {
                'gray' => 'text-gray-700 dark:text-gray-200',
                default => 'text-custom-600 dark:text-custom-400',
            },
        ]); ?>"
        style="<?php echo \Illuminate\Support\Arr::toCssStyles([
            \Filament\Support\get_color_css_variables(
                $color,
                shades: [400, 600],
                alias: 'dropdown.header.label',
            ) => $color !== 'gray',
        ]) ?>"
    >
        <?php echo e($slot); ?>

    </span>
</<?php echo e($tag); ?>>
<?php /**PATH C:\Users\HP PROBOOK\Documents\editoraClamor\vendor\filament\support\src\/../resources/views/components/dropdown/header.blade.php ENDPATH**/ ?>