<?php
    use Filament\Support\Enums\Alignment;
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions' => [],
    'description' => null,
    'heading',
    'icon',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions' => [],
    'description' => null,
    'heading',
    'icon',
]); ?>
<?php foreach (array_filter(([
    'actions' => [],
    'description' => null,
    'heading',
    'icon',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    <?php echo e($attributes->class(['fi-ta-empty-state px-6 py-12'])); ?>

>
    <div
        class="fi-ta-empty-state-content mx-auto grid max-w-lg justify-items-center text-center"
    >
        <div
            class="fi-ta-empty-state-icon-ctn mb-4 rounded-full bg-gray-100 p-3 dark:bg-gray-500/20"
        >
            <?php if (isset($component)) { $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'class' => 'fi-ta-empty-state-icon h-6 w-6 text-gray-500 dark:text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => 'fi-ta-empty-state-icon h-6 w-6 text-gray-500 dark:text-gray-400']); ?>
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
        </div>

        <?php if (isset($component)) { $__componentOriginal130fd53052f7fb96516142d5e36c3545 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal130fd53052f7fb96516142d5e36c3545 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.empty-state.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-tables::empty-state.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($heading); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal130fd53052f7fb96516142d5e36c3545)): ?>
<?php $attributes = $__attributesOriginal130fd53052f7fb96516142d5e36c3545; ?>
<?php unset($__attributesOriginal130fd53052f7fb96516142d5e36c3545); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal130fd53052f7fb96516142d5e36c3545)): ?>
<?php $component = $__componentOriginal130fd53052f7fb96516142d5e36c3545; ?>
<?php unset($__componentOriginal130fd53052f7fb96516142d5e36c3545); ?>
<?php endif; ?>

        <!--[if BLOCK]><![endif]--><?php if($description): ?>
            <?php if (isset($component)) { $__componentOriginalc142a3e962e03b45ea4d798cbb1a12b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc142a3e962e03b45ea4d798cbb1a12b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.empty-state.description','data' => ['class' => 'mt-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-tables::empty-state.description'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-1']); ?>
                <?php echo e($description); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc142a3e962e03b45ea4d798cbb1a12b4)): ?>
<?php $attributes = $__attributesOriginalc142a3e962e03b45ea4d798cbb1a12b4; ?>
<?php unset($__attributesOriginalc142a3e962e03b45ea4d798cbb1a12b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc142a3e962e03b45ea4d798cbb1a12b4)): ?>
<?php $component = $__componentOriginalc142a3e962e03b45ea4d798cbb1a12b4; ?>
<?php unset($__componentOriginalc142a3e962e03b45ea4d798cbb1a12b4); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if($actions): ?>
            <?php if (isset($component)) { $__componentOriginal32a2358b99de73a2a27625c392d6fe38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal32a2358b99de73a2a27625c392d6fe38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.actions','data' => ['actions' => $actions,'alignment' => Alignment::Center,'wrap' => true,'class' => 'mt-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-tables::actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actions),'alignment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Alignment::Center),'wrap' => true,'class' => 'mt-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal32a2358b99de73a2a27625c392d6fe38)): ?>
<?php $attributes = $__attributesOriginal32a2358b99de73a2a27625c392d6fe38; ?>
<?php unset($__attributesOriginal32a2358b99de73a2a27625c392d6fe38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32a2358b99de73a2a27625c392d6fe38)): ?>
<?php $component = $__componentOriginal32a2358b99de73a2a27625c392d6fe38; ?>
<?php unset($__componentOriginal32a2358b99de73a2a27625c392d6fe38); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH C:\Users\HP PROBOOK\Documents\editoraClamor\vendor\filament\tables\src\/../resources/views/components/empty-state/index.blade.php ENDPATH**/ ?>