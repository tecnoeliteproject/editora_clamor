<?php if (isset($component)) { $__componentOriginal0582040fe960eff09c1461f7f86a8187 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0582040fe960eff09c1461f7f86a8187 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.cell','data' => ['attributes' => 
        \Filament\Support\prepare_inherited_attributes($attributes)
            ->class(['w-1'])
    ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-tables::cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
        \Filament\Support\prepare_inherited_attributes($attributes)
            ->class(['w-1'])
    )]); ?>
    <div class="px-3 py-4">
        <?php echo e($slot); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0582040fe960eff09c1461f7f86a8187)): ?>
<?php $attributes = $__attributesOriginal0582040fe960eff09c1461f7f86a8187; ?>
<?php unset($__attributesOriginal0582040fe960eff09c1461f7f86a8187); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0582040fe960eff09c1461f7f86a8187)): ?>
<?php $component = $__componentOriginal0582040fe960eff09c1461f7f86a8187; ?>
<?php unset($__componentOriginal0582040fe960eff09c1461f7f86a8187); ?>
<?php endif; ?>
<?php /**PATH C:\00\editoraClamor\vendor\filament\tables\src\/../resources/views/components/selection/cell.blade.php ENDPATH**/ ?>