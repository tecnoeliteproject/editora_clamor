<?php
    use Filament\Support\Enums\IconSize;
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'color' => 'gray',
    'icon',
    'size' => IconSize::Large,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'color' => 'gray',
    'icon',
    'size' => IconSize::Large,
]); ?>
<?php foreach (array_filter(([
    'color' => 'gray',
    'icon',
    'size' => IconSize::Large,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'attributes' => 
        $attributes
            ->class([
                'fi-no-notification-icon',
                match ($color) {
                    'gray' => 'fi-color-gray text-gray-400',
                    default => 'fi-color-custom text-custom-400',
                },
                match ($size) {
                    IconSize::Small, 'sm' => 'h-4 w-4',
                    IconSize::Medium, 'md' => 'h-5 w-5',
                    IconSize::Large, 'lg' => 'h-6 w-6',
                    default => $size,
                },
            ])
            ->style([
                \Filament\Support\get_color_css_variables(
                    $color,
                    shades: [400],
                    alias: 'notifications::notification.icon',
                ),
            ])
    ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
        $attributes
            ->class([
                'fi-no-notification-icon',
                match ($color) {
                    'gray' => 'fi-color-gray text-gray-400',
                    default => 'fi-color-custom text-custom-400',
                },
                match ($size) {
                    IconSize::Small, 'sm' => 'h-4 w-4',
                    IconSize::Medium, 'md' => 'h-5 w-5',
                    IconSize::Large, 'lg' => 'h-6 w-6',
                    default => $size,
                },
            ])
            ->style([
                \Filament\Support\get_color_css_variables(
                    $color,
                    shades: [400],
                    alias: 'notifications::notification.icon',
                ),
            ])
    )]); ?>
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
<?php /**PATH C:\Users\HP PROBOOK\Documents\editoraClamor\vendor\filament\notifications\src\/../resources/views/components/icon.blade.php ENDPATH**/ ?>