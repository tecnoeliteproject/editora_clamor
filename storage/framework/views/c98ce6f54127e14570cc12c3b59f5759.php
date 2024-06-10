<?php
    use Filament\Support\Enums\VerticalAlignment;
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'field' => null,
    'hasInlineLabel' => null,
    'hasNestedRecursiveValidationRules' => null,
    'helperText' => null,
    'hint' => null,
    'hintActions' => null,
    'hintColor' => null,
    'hintIcon' => null,
    'hintIconTooltip' => null,
    'id' => null,
    'inlineLabelVerticalAlignment' => VerticalAlignment::Start,
    'isDisabled' => null,
    'isMarkedAsRequired' => null,
    'label' => null,
    'labelPrefix' => null,
    'labelSrOnly' => null,
    'labelSuffix' => null,
    'required' => null,
    'statePath' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'field' => null,
    'hasInlineLabel' => null,
    'hasNestedRecursiveValidationRules' => null,
    'helperText' => null,
    'hint' => null,
    'hintActions' => null,
    'hintColor' => null,
    'hintIcon' => null,
    'hintIconTooltip' => null,
    'id' => null,
    'inlineLabelVerticalAlignment' => VerticalAlignment::Start,
    'isDisabled' => null,
    'isMarkedAsRequired' => null,
    'label' => null,
    'labelPrefix' => null,
    'labelSrOnly' => null,
    'labelSuffix' => null,
    'required' => null,
    'statePath' => null,
]); ?>
<?php foreach (array_filter(([
    'field' => null,
    'hasInlineLabel' => null,
    'hasNestedRecursiveValidationRules' => null,
    'helperText' => null,
    'hint' => null,
    'hintActions' => null,
    'hintColor' => null,
    'hintIcon' => null,
    'hintIconTooltip' => null,
    'id' => null,
    'inlineLabelVerticalAlignment' => VerticalAlignment::Start,
    'isDisabled' => null,
    'isMarkedAsRequired' => null,
    'label' => null,
    'labelPrefix' => null,
    'labelSrOnly' => null,
    'labelSuffix' => null,
    'required' => null,
    'statePath' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    if ($field) {
        $hasInlineLabel ??= $field->hasInlineLabel();
        $hasNestedRecursiveValidationRules ??= $field instanceof \Filament\Forms\Components\Contracts\HasNestedRecursiveValidationRules;
        $helperText ??= $field->getHelperText();
        $hint ??= $field->getHint();
        $hintActions ??= $field->getHintActions();
        $hintColor ??= $field->getHintColor();
        $hintIcon ??= $field->getHintIcon();
        $hintIconTooltip ??= $field->getHintIconTooltip();
        $id ??= $field->getId();
        $isDisabled ??= $field->isDisabled();
        $isMarkedAsRequired ??= $field->isMarkedAsRequired();
        $label ??= $field->getLabel();
        $labelSrOnly ??= $field->isLabelHidden();
        $required ??= $field->isRequired();
        $statePath ??= $field->getStatePath();
    }

    $hintActions = array_filter(
        $hintActions ?? [],
        fn (\Filament\Forms\Components\Actions\Action $hintAction): bool => $hintAction->isVisible(),
    );

    $hasError = filled($statePath) && ($errors->has($statePath) || ($hasNestedRecursiveValidationRules && $errors->has("{$statePath}.*")));
?>

<div data-field-wrapper <?php echo e($attributes->class(['fi-fo-field-wrp'])); ?>>
    <!--[if BLOCK]><![endif]--><?php if($label && $labelSrOnly): ?>
        <label for="<?php echo e($id); ?>" class="sr-only">
            <?php echo e($label); ?>

        </label>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <div
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'grid gap-y-2',
            'sm:grid-cols-3 sm:gap-x-4' => $hasInlineLabel,
            match ($inlineLabelVerticalAlignment) {
                VerticalAlignment::Start => 'sm:items-start',
                VerticalAlignment::Center => 'sm:items-center',
                VerticalAlignment::End => 'sm:items-end',
            } => $hasInlineLabel,
        ]); ?>"
    >
        <!--[if BLOCK]><![endif]--><?php if(($label && (! $labelSrOnly)) || $labelPrefix || $labelSuffix || filled($hint) || $hintIcon || count($hintActions)): ?>
            <div
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'flex items-center justify-between gap-x-3',
                    ($label instanceof \Illuminate\View\ComponentSlot) ? $label->attributes->get('class') : null,
                ]); ?>"
            >
                <!--[if BLOCK]><![endif]--><?php if($label && (! $labelSrOnly)): ?>
                    <?php if (isset($component)) { $__componentOriginalce0c3abfe32d61e042620ba43c1aa075 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce0c3abfe32d61e042620ba43c1aa075 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.label','data' => ['for' => $id,'isDisabled' => $isDisabled,'isMarkedAsRequired' => $isMarkedAsRequired,'prefix' => $labelPrefix,'required' => $required,'suffix' => $labelSuffix]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'is-disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isDisabled),'is-marked-as-required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMarkedAsRequired),'prefix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labelPrefix),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($required),'suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labelSuffix)]); ?>
                        <?php echo e($label); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce0c3abfe32d61e042620ba43c1aa075)): ?>
<?php $attributes = $__attributesOriginalce0c3abfe32d61e042620ba43c1aa075; ?>
<?php unset($__attributesOriginalce0c3abfe32d61e042620ba43c1aa075); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0c3abfe32d61e042620ba43c1aa075)): ?>
<?php $component = $__componentOriginalce0c3abfe32d61e042620ba43c1aa075; ?>
<?php unset($__componentOriginalce0c3abfe32d61e042620ba43c1aa075); ?>
<?php endif; ?>
                <?php elseif($labelPrefix): ?>
                    <?php echo e($labelPrefix); ?>

                <?php elseif($labelSuffix): ?>
                    <?php echo e($labelSuffix); ?>

                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><?php if(filled($hint) || $hintIcon || count($hintActions)): ?>
                    <?php if (isset($component)) { $__componentOriginal1e15ea267b589d7e7cb0450949a7b403 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e15ea267b589d7e7cb0450949a7b403 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.hint','data' => ['actions' => $hintActions,'color' => $hintColor,'icon' => $hintIcon,'tooltip' => $hintIconTooltip]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.hint'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hintActions),'color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hintColor),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hintIcon),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hintIconTooltip)]); ?>
                        <?php echo e($hint); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e15ea267b589d7e7cb0450949a7b403)): ?>
<?php $attributes = $__attributesOriginal1e15ea267b589d7e7cb0450949a7b403; ?>
<?php unset($__attributesOriginal1e15ea267b589d7e7cb0450949a7b403); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e15ea267b589d7e7cb0450949a7b403)): ?>
<?php $component = $__componentOriginal1e15ea267b589d7e7cb0450949a7b403; ?>
<?php unset($__componentOriginal1e15ea267b589d7e7cb0450949a7b403); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if((! \Filament\Support\is_slot_empty($slot)) || $hasError || filled($helperText)): ?>
            <div
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'grid gap-y-2',
                    'sm:col-span-2' => $hasInlineLabel,
                ]); ?>"
            >
                <?php echo e($slot); ?>


                <!--[if BLOCK]><![endif]--><?php if($hasError): ?>
                    <?php if (isset($component)) { $__componentOriginal22095ede46a88c291ad3a78cf084ef04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22095ede46a88c291ad3a78cf084ef04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.error-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e($errors->has($statePath) ? $errors->first($statePath) : ($hasNestedRecursiveValidationRules ? $errors->first("{$statePath}.*") : null)); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22095ede46a88c291ad3a78cf084ef04)): ?>
<?php $attributes = $__attributesOriginal22095ede46a88c291ad3a78cf084ef04; ?>
<?php unset($__attributesOriginal22095ede46a88c291ad3a78cf084ef04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22095ede46a88c291ad3a78cf084ef04)): ?>
<?php $component = $__componentOriginal22095ede46a88c291ad3a78cf084ef04; ?>
<?php unset($__componentOriginal22095ede46a88c291ad3a78cf084ef04); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><?php if(filled($helperText)): ?>
                    <?php if (isset($component)) { $__componentOriginal8530e05d59f2cbc21adf63528d237ef3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8530e05d59f2cbc21adf63528d237ef3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e($helperText); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8530e05d59f2cbc21adf63528d237ef3)): ?>
<?php $attributes = $__attributesOriginal8530e05d59f2cbc21adf63528d237ef3; ?>
<?php unset($__attributesOriginal8530e05d59f2cbc21adf63528d237ef3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8530e05d59f2cbc21adf63528d237ef3)): ?>
<?php $component = $__componentOriginal8530e05d59f2cbc21adf63528d237ef3; ?>
<?php unset($__componentOriginal8530e05d59f2cbc21adf63528d237ef3); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH C:\Users\DESKTOP\Documents\Programação\editoraClamor\vendor\filament\forms\src\/../resources/views/components/field-wrapper/index.blade.php ENDPATH**/ ?>