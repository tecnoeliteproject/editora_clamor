<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions',
    'alignment' => null,
    'fullWidth' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions',
    'alignment' => null,
    'fullWidth' => false,
]); ?>
<?php foreach (array_filter(([
    'actions',
    'alignment' => null,
    'fullWidth' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php if(count($actions)): ?>
    <div
        <?php if($this->areFormActionsSticky()): ?>
            x-data="{
                isSticky: false,

                evaluatePageScrollPosition: function () {
                    this.isSticky =
                        document.body.scrollHeight >=
                        window.scrollY + window.innerHeight * 2
                },
            }"
            x-init="evaluatePageScrollPosition"
            x-on:scroll.window="evaluatePageScrollPosition"
            x-bind:class="{
                'fi-sticky sticky bottom-0 -mx-4 transform bg-white p-4 shadow-lg ring-1 ring-gray-950/5 transition dark:bg-gray-900 dark:ring-white/10 md:bottom-4 md:rounded-xl':
                    isSticky,
            }"
        <?php endif; ?>
        class="fi-form-actions"
    >
        <?php if (isset($component)) { $__componentOriginal59d80b1aec4ae4c914a3e52dede19504 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal59d80b1aec4ae4c914a3e52dede19504 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.actions','data' => ['actions' => $actions,'alignment' => $alignment ?? $this->getFormActionsAlignment(),'fullWidth' => $fullWidth]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actions),'alignment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($alignment ?? $this->getFormActionsAlignment()),'full-width' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fullWidth)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal59d80b1aec4ae4c914a3e52dede19504)): ?>
<?php $attributes = $__attributesOriginal59d80b1aec4ae4c914a3e52dede19504; ?>
<?php unset($__attributesOriginal59d80b1aec4ae4c914a3e52dede19504); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59d80b1aec4ae4c914a3e52dede19504)): ?>
<?php $component = $__componentOriginal59d80b1aec4ae4c914a3e52dede19504; ?>
<?php unset($__componentOriginal59d80b1aec4ae4c914a3e52dede19504); ?>
<?php endif; ?>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\00\editoraClamor\vendor\filament\filament\src\/../resources/views/components/form/actions.blade.php ENDPATH**/ ?>