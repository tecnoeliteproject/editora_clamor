<?php if (isset($component)) { $__componentOriginal70308eab0db7bee07ae0d7b141f6dc83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70308eab0db7bee07ae0d7b141f6dc83 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.action','data' => ['action' => $action,'badge' => $getBadge(),'badgeColor' => $getBadgeColor(),'dynamicComponent' => 'filament::dropdown.list.item','icon' => $getGroupedIcon(),'class' => 'fi-ac-grouped-action']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-actions::action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action),'badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getBadge()),'badge-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getBadgeColor()),'dynamic-component' => 'filament::dropdown.list.item','icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getGroupedIcon()),'class' => 'fi-ac-grouped-action']); ?>
    <?php echo e($getLabel()); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal70308eab0db7bee07ae0d7b141f6dc83)): ?>
<?php $attributes = $__attributesOriginal70308eab0db7bee07ae0d7b141f6dc83; ?>
<?php unset($__attributesOriginal70308eab0db7bee07ae0d7b141f6dc83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70308eab0db7bee07ae0d7b141f6dc83)): ?>
<?php $component = $__componentOriginal70308eab0db7bee07ae0d7b141f6dc83; ?>
<?php unset($__componentOriginal70308eab0db7bee07ae0d7b141f6dc83); ?>
<?php endif; ?>
<?php /**PATH C:\Users\HP PROBOOK\Documents\editoraClamor\vendor\filament\actions\src\/../resources/views/grouped-action.blade.php ENDPATH**/ ?>