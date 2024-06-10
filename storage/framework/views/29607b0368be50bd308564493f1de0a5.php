<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['color','disabled','form','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','badge','badgeColor','iconPosition','labeledFrom','outlined','size','badgeColor','iconPosition','labeledFrom']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['color','disabled','form','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','badge','badgeColor','iconPosition','labeledFrom','outlined','size','badgeColor','iconPosition','labeledFrom']); ?>
<?php foreach (array_filter((['color','disabled','form','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','badge','badgeColor','iconPosition','labeledFrom','outlined','size','badgeColor','iconPosition','labeledFrom']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => $color,'disabled' => $disabled,'form' => $form,'href' => $href,'icon' => $icon,'iconSize' => $iconSize,'keyBindings' => $keyBindings,'labelSrOnly' => $labelSrOnly,'tag' => $tag,'target' => $target,'tooltip' => $tooltip,'type' => $type,'wire:click' => $wireClick,'wire:target' => $wireTarget,'xOn:click' => $xOnClick,'class' => $class,'badge' => $badge,'badgeColor' => $badgeColor,'iconPosition' => $iconPosition,'labeledFrom' => $labeledFrom,'outlined' => $outlined,'size' => $size]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($color),'disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disabled),'form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($href),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'icon-size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconSize),'key-bindings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($keyBindings),'label-sr-only' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labelSrOnly),'tag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tag),'target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($target),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tooltip),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type),'wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wireClick),'wire:target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wireTarget),'x-on:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($xOnClick),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class),'badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badge),'badgeColor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badgeColor),'iconPosition' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconPosition),'labeledFrom' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labeledFrom),'outlined' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($outlined),'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($size),'badge-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badgeColor),'icon-position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconPosition),'labeled-from' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labeledFrom)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?><?php /**PATH C:\Users\DESKTOP\Documents\Programação\editoraClamor\storage\framework\views/d1b2b6653c14b52586e2f46df3b3356f.blade.php ENDPATH**/ ?>