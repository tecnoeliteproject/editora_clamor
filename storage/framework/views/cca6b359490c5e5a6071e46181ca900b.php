<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'activeLocale' => null,
    'activeManager',
    'content' => null,
    'contentTabLabel' => null,
    'managers',
    'ownerRecord',
    'pageClass',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'activeLocale' => null,
    'activeManager',
    'content' => null,
    'contentTabLabel' => null,
    'managers',
    'ownerRecord',
    'pageClass',
]); ?>
<?php foreach (array_filter(([
    'activeLocale' => null,
    'activeManager',
    'content' => null,
    'contentTabLabel' => null,
    'managers',
    'ownerRecord',
    'pageClass',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="fi-resource-relation-managers flex flex-col gap-y-6">
    <?php
        $activeManager = strval($activeManager);
        $normalizeRelationManagerClass = function (string | Filament\Resources\RelationManagers\RelationManagerConfiguration $manager): string {
            if ($manager instanceof \Filament\Resources\RelationManagers\RelationManagerConfiguration) {
                return $manager->relationManager;
            }

            return $manager;
        };
    ?>

    <!--[if BLOCK]><![endif]--><?php if((count($managers) > 1) || $content): ?>
        <?php if (isset($component)) { $__componentOriginal447636fe67a19f9c79619fb5a3c0c28d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal447636fe67a19f9c79619fb5a3c0c28d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.tabs.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php
                $tabs = $managers;

                if ($content) {
                    $tabs = array_replace([null => null], $tabs);
                }
            ?>

            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabKey => $manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $tabKey = strval($tabKey);
                    $isGroup = $manager instanceof \Filament\Resources\RelationManagers\RelationGroup;

                    if ($isGroup) {
                        $manager->ownerRecord($ownerRecord);
                        $manager->pageClass($pageClass);
                    } elseif (filled($tabKey)) {
                        $manager = $normalizeRelationManagerClass($manager);
                    }
                ?>

                <?php if (isset($component)) { $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.tabs.item','data' => ['active' => $activeManager === $tabKey,'badge' => filled($tabKey) ? ($isGroup ? $manager->getBadge() : $manager::getBadge($ownerRecord, $pageClass)) : null,'icon' => filled($tabKey) ? ($isGroup ? $manager->getIcon() : $manager::getIcon($ownerRecord, $pageClass)) : null,'iconPosition' => filled($tabKey) ? ($isGroup ? $manager->getIconPosition() : $manager::getIconPosition($ownerRecord, $pageClass)) : null,'wire:click' => '$set(\'activeRelationManager\', ' . (filled($tabKey) ? ('\'' . $tabKey . '\'') : 'null') . ')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($activeManager === $tabKey),'badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filled($tabKey) ? ($isGroup ? $manager->getBadge() : $manager::getBadge($ownerRecord, $pageClass)) : null),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filled($tabKey) ? ($isGroup ? $manager->getIcon() : $manager::getIcon($ownerRecord, $pageClass)) : null),'icon-position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filled($tabKey) ? ($isGroup ? $manager->getIconPosition() : $manager::getIconPosition($ownerRecord, $pageClass)) : null),'wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('$set(\'activeRelationManager\', ' . (filled($tabKey) ? ('\'' . $tabKey . '\'') : 'null') . ')')]); ?>
                    <!--[if BLOCK]><![endif]--><?php if(filled($tabKey)): ?>
                        <?php echo e($isGroup ? $manager->getLabel() : $manager::getTitle($ownerRecord, $pageClass)); ?>

                    <?php elseif($content): ?>
                        <?php echo e($contentTabLabel); ?>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $attributes = $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $component = $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal447636fe67a19f9c79619fb5a3c0c28d)): ?>
<?php $attributes = $__attributesOriginal447636fe67a19f9c79619fb5a3c0c28d; ?>
<?php unset($__attributesOriginal447636fe67a19f9c79619fb5a3c0c28d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal447636fe67a19f9c79619fb5a3c0c28d)): ?>
<?php $component = $__componentOriginal447636fe67a19f9c79619fb5a3c0c28d; ?>
<?php unset($__componentOriginal447636fe67a19f9c79619fb5a3c0c28d); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(filled($activeManager) && isset($managers[$activeManager])): ?>
        <div
            <?php if(count($managers) > 1): ?>
                id="relationManager<?php echo e(ucfirst($activeManager)); ?>"
                role="tabpanel"
                tabindex="0"
            <?php endif; ?>
            wire:key="<?php echo e($this->getId()); ?>.relation-managers.active"
            class="flex flex-col gap-y-4"
        >
            <?php
                $managerLivewireProperties = ['ownerRecord' => $ownerRecord, 'pageClass' => $pageClass];

                if (filled($activeLocale)) {
                    $managerLivewireProperties['activeLocale'] = $activeLocale;
                }
            ?>

            <!--[if BLOCK]><![endif]--><?php if($managers[$activeManager] instanceof \Filament\Resources\RelationManagers\RelationGroup): ?>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $managers[$activeManager]->ownerRecord($ownerRecord)->pageClass($pageClass)->getManagers(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupedManagerKey => $groupedManager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $normalizedGroupedManagerClass = $normalizeRelationManagerClass($groupedManager);
                    ?>

                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split($normalizedGroupedManagerClass,
                        [...$managerLivewireProperties, ...(($groupedManager instanceof \Filament\Resources\RelationManagers\RelationManagerConfiguration) ? [...$groupedManager->relationManager::getDefaultProperties(), ...$groupedManager->properties] : $groupedManager::getDefaultProperties())],);

$__html = app('livewire')->mount($__name, $__params, "{$normalizedGroupedManagerClass}-{$groupedManagerKey}", $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            <?php else: ?>
                <?php
                    $manager = $managers[$activeManager];
                    $normalizedManagerClass = $normalizeRelationManagerClass($manager);
                ?>

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split($normalizedManagerClass,
                    [...$managerLivewireProperties, ...(($manager instanceof \Filament\Resources\RelationManagers\RelationManagerConfiguration) ? [...$manager->relationManager::getDefaultProperties(), ...$manager->properties] : $manager::getDefaultProperties())],);

$__html = app('livewire')->mount($__name, $__params, $normalizedManagerClass, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php elseif($content): ?>
        <?php echo e($content); ?>

    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\00\editoraClamor\vendor\filament\filament\src\/../resources/views/components/resources/relation-managers.blade.php ENDPATH**/ ?>