<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'action',
    'dynamicComponent',
    'icon' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'action',
    'dynamicComponent',
    'icon' => null,
]); ?>
<?php foreach (array_filter(([
    'action',
    'dynamicComponent',
    'icon' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $isDisabled = $action->isDisabled();
    $url = $action->getUrl();
?>

<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $dynamicComponent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => $action->getColor(),'disabled' => $isDisabled,'form' => $action->getFormToSubmit(),'href' => $isDisabled ? null : $url,'icon' => $icon ?? $action->getIcon(),'icon-size' => $action->getIconSize(),'key-bindings' => $action->getKeyBindings(),'label-sr-only' => $action->isLabelHidden(),'tag' => $url ? 'a' : 'button','target' => ($url && $action->shouldOpenUrlInNewTab()) ? '_blank' : null,'tooltip' => $action->getTooltip(),'type' => $action->canSubmitForm() ? 'submit' : 'button','wire:click' => $action->getLivewireClickHandler(),'wire:target' => $action->getLivewireTarget(),'x-on:click' => $action->getAlpineClickHandler(),'attributes' => \Filament\Support\prepare_inherited_attributes($attributes)->merge($action->getExtraAttributes(), escape: false)]); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php /**PATH C:\Users\DESKTOP\Documents\Programação\editoraClamor\vendor\filament\actions\src\/../resources/views/components/action.blade.php ENDPATH**/ ?>