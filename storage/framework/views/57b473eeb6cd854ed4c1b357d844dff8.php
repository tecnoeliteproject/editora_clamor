<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'maxHeight' => null,
    'offset' => 8,
    'placement' => null,
    'shift' => false,
    'teleport' => false,
    'trigger' => null,
    'width' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'maxHeight' => null,
    'offset' => 8,
    'placement' => null,
    'shift' => false,
    'teleport' => false,
    'trigger' => null,
    'width' => null,
]); ?>
<?php foreach (array_filter(([
    'maxHeight' => null,
    'offset' => 8,
    'placement' => null,
    'shift' => false,
    'teleport' => false,
    'trigger' => null,
    'width' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    use Filament\Support\Enums\MaxWidth;
?>

<div
    x-data="{
        toggle: function (event) {
            $refs.panel.toggle(event)
        },

        open: function (event) {
            $refs.panel.open(event)
        },

        close: function (event) {
            $refs.panel.close(event)
        },
    }"
    <?php echo e($attributes->class(['fi-dropdown'])); ?>

>
    <div
        x-on:click="toggle"
        <?php echo e($trigger->attributes->class(['fi-dropdown-trigger flex cursor-pointer'])); ?>

    >
        <?php echo e($trigger); ?>

    </div>

    <div
        x-cloak
        x-float<?php echo e($placement ? ".placement.{$placement}" : ''); ?>.flip<?php echo e($shift ? '.shift' : ''); ?><?php echo e($teleport ? '.teleport' : ''); ?><?php echo e($offset ? '.offset' : ''); ?>="{ offset: <?php echo e($offset); ?> }"
        x-ref="panel"
        x-transition:enter-start="opacity-0"
        x-transition:leave-end="opacity-0"
        <?php if($attributes->has('wire:key')): ?>
            wire:ignore.self
            wire:key="<?php echo e($attributes->get('wire:key')); ?>.panel"
        <?php endif; ?>
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10',
            match ($width) {
                MaxWidth::ExtraSmall, 'xs' => 'max-w-xs',
                MaxWidth::Small, 'sm' => 'max-w-sm',
                MaxWidth::Medium, 'md' => 'max-w-md',
                MaxWidth::Large, 'lg' => 'max-w-lg',
                MaxWidth::ExtraLarge, 'xl' => 'max-w-xl',
                MaxWidth::TwoExtraLarge, '2xl' => 'max-w-2xl',
                MaxWidth::ThreeExtraLarge, '3xl' => 'max-w-3xl',
                MaxWidth::FourExtraLarge, '4xl' => 'max-w-4xl',
                MaxWidth::FiveExtraLarge, '5xl' => 'max-w-5xl',
                MaxWidth::SixExtraLarge, '6xl' => 'max-w-6xl',
                MaxWidth::SevenExtraLarge, '7xl' => 'max-w-7xl',
                null => 'max-w-[14rem]',
                default => $width,
            },
            'overflow-y-auto' => $maxHeight,
        ]); ?>"
        style="<?php echo \Illuminate\Support\Arr::toCssStyles([
            "max-height: {$maxHeight}" => $maxHeight,
        ]) ?>"
    >
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\00\editoraClamor\vendor\filament\support\src\/../resources/views/components/dropdown/index.blade.php ENDPATH**/ ?>