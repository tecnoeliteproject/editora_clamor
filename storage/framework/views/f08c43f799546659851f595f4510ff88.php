<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'collapsible' => true,
    'icon' => null,
    'items' => [],
    'label' => null,
    'sidebarCollapsible' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'collapsible' => true,
    'icon' => null,
    'items' => [],
    'label' => null,
    'sidebarCollapsible' => true,
]); ?>
<?php foreach (array_filter(([
    'collapsible' => true,
    'icon' => null,
    'items' => [],
    'label' => null,
    'sidebarCollapsible' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li
    x-data="{ label: <?php echo \Illuminate\Support\Js::from($label)->toHtml() ?> }"
    data-group-label="<?php echo e($label); ?>"
    <?php echo e($attributes->class(['fi-sidebar-group flex flex-col gap-y-1'])); ?>

>
    <?php if($label): ?>
        <div
            <?php if($collapsible): ?>
                x-on:click="$store.sidebar.toggleCollapsedGroup(label)"
            <?php endif; ?>
            <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
                x-show="$store.sidebar.isOpen"
                x-transition:enter="delay-100 lg:transition"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
            <?php endif; ?>
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'fi-sidebar-group-button flex items-center gap-x-3 px-2 py-2',
                'cursor-pointer' => $collapsible,
            ]); ?>"
        >
            <?php if($icon): ?>
                <?php if (isset($component)) { $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'class' => 'fi-sidebar-group-icon h-6 w-6 text-gray-400 dark:text-gray-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => 'fi-sidebar-group-icon h-6 w-6 text-gray-400 dark:text-gray-500']); ?>
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
                class="fi-sidebar-group-label flex-1 text-sm font-medium leading-6 text-gray-500 dark:text-gray-400"
            >
                <?php echo e($label); ?>

            </span>

            <?php if($collapsible): ?>
                <?php if (isset($component)) { $__componentOriginalf0029cce6d19fd6d472097ff06a800a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf0029cce6d19fd6d472097ff06a800a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon-button','data' => ['color' => 'gray','icon' => 'heroicon-m-chevron-up','iconAlias' => 'panels::sidebar.group.collapse-button','label' => $label,'xBind:ariaExpanded' => '! $store.sidebar.groupIsCollapsed(label)','xOn:click.stop' => '$store.sidebar.toggleCollapsedGroup(label)','class' => 'fi-sidebar-group-collapse-button','xBind:class' => '{ \'-rotate-180\': $store.sidebar.groupIsCollapsed(label) }']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'gray','icon' => 'heroicon-m-chevron-up','icon-alias' => 'panels::sidebar.group.collapse-button','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'x-bind:aria-expanded' => '! $store.sidebar.groupIsCollapsed(label)','x-on:click.stop' => '$store.sidebar.toggleCollapsedGroup(label)','class' => 'fi-sidebar-group-collapse-button','x-bind:class' => '{ \'-rotate-180\': $store.sidebar.groupIsCollapsed(label) }']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf0029cce6d19fd6d472097ff06a800a1)): ?>
<?php $attributes = $__attributesOriginalf0029cce6d19fd6d472097ff06a800a1; ?>
<?php unset($__attributesOriginalf0029cce6d19fd6d472097ff06a800a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0029cce6d19fd6d472097ff06a800a1)): ?>
<?php $component = $__componentOriginalf0029cce6d19fd6d472097ff06a800a1; ?>
<?php unset($__componentOriginalf0029cce6d19fd6d472097ff06a800a1); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <ul
        x-show="! ($store.sidebar.groupIsCollapsed(label) && ($store.sidebar.isOpen || <?php echo \Illuminate\Support\Js::from(! filament()->isSidebarCollapsibleOnDesktop())->toHtml() ?>))"
        <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
            x-transition:enter="delay-100 lg:transition"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
        <?php endif; ?>
        x-collapse.duration.200ms
        class="fi-sidebar-group-items flex flex-col gap-y-1"
    >
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal7edbc33aaa546e1feb86647dcd0e4eb8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7edbc33aaa546e1feb86647dcd0e4eb8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.sidebar.item','data' => ['active' => $item->isActive(),'activeChildItems' => $item->isChildItemsActive(),'activeIcon' => $item->getActiveIcon(),'badge' => $item->getBadge(),'badgeColor' => $item->getBadgeColor(),'childItems' => $item->getChildItems(),'first' => $loop->first,'grouped' => filled($label),'icon' => $item->getIcon(),'last' => $loop->last,'shouldOpenUrlInNewTab' => $item->shouldOpenUrlInNewTab(),'sidebarCollapsible' => $sidebarCollapsible,'url' => $item->getUrl()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::sidebar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->isActive()),'active-child-items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->isChildItemsActive()),'active-icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getActiveIcon()),'badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getBadge()),'badge-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getBadgeColor()),'child-items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getChildItems()),'first' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop->first),'grouped' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filled($label)),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getIcon()),'last' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop->last),'should-open-url-in-new-tab' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->shouldOpenUrlInNewTab()),'sidebar-collapsible' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sidebarCollapsible),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getUrl())]); ?>
                <?php echo e($item->getLabel()); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7edbc33aaa546e1feb86647dcd0e4eb8)): ?>
<?php $attributes = $__attributesOriginal7edbc33aaa546e1feb86647dcd0e4eb8; ?>
<?php unset($__attributesOriginal7edbc33aaa546e1feb86647dcd0e4eb8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7edbc33aaa546e1feb86647dcd0e4eb8)): ?>
<?php $component = $__componentOriginal7edbc33aaa546e1feb86647dcd0e4eb8; ?>
<?php unset($__componentOriginal7edbc33aaa546e1feb86647dcd0e4eb8); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</li>
<?php /**PATH C:\Users\HP PROBOOK\Documents\editoraClamor\vendor\filament\filament\src\/../resources/views/components/sidebar/group.blade.php ENDPATH**/ ?>