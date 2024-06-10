<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'columns' => [
        'lg' => 2,
    ],
    'data' => [],
    'widgets' => [],
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'columns' => [
        'lg' => 2,
    ],
    'data' => [],
    'widgets' => [],
]); ?>
<?php foreach (array_filter(([
    'columns' => [
        'lg' => 2,
    ],
    'data' => [],
    'widgets' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal30dbd75eb120a380110a2b340cd88f46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30dbd75eb120a380110a2b340cd88f46 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.grid.index','data' => ['default' => $columns['default'] ?? 1,'sm' => $columns['sm'] ?? null,'md' => $columns['md'] ?? null,'lg' => $columns['lg'] ?? ($columns ? (is_array($columns) ? null : $columns) : 2),'xl' => $columns['xl'] ?? null,'twoXl' => $columns['2xl'] ?? null,'attributes' => \Filament\Support\prepare_inherited_attributes($attributes)->class('fi-wi gap-6')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['default' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['default'] ?? 1),'sm' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['sm'] ?? null),'md' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['md'] ?? null),'lg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['lg'] ?? ($columns ? (is_array($columns) ? null : $columns) : 2)),'xl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['xl'] ?? null),'two-xl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['2xl'] ?? null),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Filament\Support\prepare_inherited_attributes($attributes)->class('fi-wi gap-6'))]); ?>
    <?php
        $normalizeWidgetClass = function (string | Filament\Widgets\WidgetConfiguration $widget): string {
            if ($widget instanceof \Filament\Widgets\WidgetConfiguration) {
                return $widget->widget;
            }

            return $widget;
        };
    ?>

    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $widgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widgetKey => $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $widgetClass = $normalizeWidgetClass($widget);
        ?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split($widgetClass,
            [...(($widget instanceof \Filament\Widgets\WidgetConfiguration) ? [...$widget->widget::getDefaultProperties(), ...$widget->properties] : $widget::getDefaultProperties()), ...$data],);

$__html = app('livewire')->mount($__name, $__params, "{$widgetClass}-{$widgetKey}", $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30dbd75eb120a380110a2b340cd88f46)): ?>
<?php $attributes = $__attributesOriginal30dbd75eb120a380110a2b340cd88f46; ?>
<?php unset($__attributesOriginal30dbd75eb120a380110a2b340cd88f46); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30dbd75eb120a380110a2b340cd88f46)): ?>
<?php $component = $__componentOriginal30dbd75eb120a380110a2b340cd88f46; ?>
<?php unset($__componentOriginal30dbd75eb120a380110a2b340cd88f46); ?>
<?php endif; ?>
<?php /**PATH C:\00\editoraClamor\vendor\filament\widgets\src\/../resources/views/components/widgets.blade.php ENDPATH**/ ?>