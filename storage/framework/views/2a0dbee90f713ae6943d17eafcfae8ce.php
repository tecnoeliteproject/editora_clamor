<?php
    $limit = $getLimit();
    $state = \Illuminate\Support\Arr::wrap($getState());
    $limitedState = array_slice($state, 0, $limit);
    $isCircular = $isCircular();
    $isSquare = $isSquare();
    $isStacked = $isStacked();
    $overlap = $isStacked ? ($getOverlap() ?? 2) : null;
    $ring = $isStacked ? ($getRing() ?? 2) : null;
    $height = $getHeight() ?? ($isStacked ? '2rem' : '2.5rem');
    $width = $getWidth() ?? (($isCircular || $isSquare) ? $height : null);

    $defaultImageUrl = $getDefaultImageUrl();

    if ((! count($limitedState)) && filled($defaultImageUrl)) {
        $limitedState = [null];
    }

    $ringClasses = \Illuminate\Support\Arr::toCssClasses([
        'ring-white dark:ring-gray-900',
        match ($ring) {
            0 => null,
            1 => 'ring-1',
            2 => 'ring-2',
            3 => 'ring',
            4 => 'ring-4',
            default => $ring,
        },
    ]);

    $hasLimitedRemainingText = $hasLimitedRemainingText();
    $isLimitedRemainingTextSeparate = $isLimitedRemainingTextSeparate();

    $limitedRemainingTextSizeClasses = match ($getLimitedRemainingTextSize()) {
        'xs' => 'text-xs',
        'sm', null => 'text-sm',
        'base', 'md' => 'text-base',
        'lg' => 'text-lg',
        default => $size,
    };
?>

<div
    <?php echo e($attributes
            ->merge($getExtraAttributes(), escape: false)
            ->class([
                'fi-ta-image',
                'px-3 py-4' => ! $isInline(),
            ])); ?>

>
    <!--[if BLOCK]><![endif]--><?php if(count($limitedState)): ?>
        <div class="flex items-center gap-x-2.5">
            <div
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'flex',
                    'flex-wrap' => $canWrap(),
                    match ($overlap) {
                        0 => null,
                        1 => '-space-x-1',
                        2 => '-space-x-2',
                        3 => '-space-x-3',
                        4 => '-space-x-4',
                        5 => '-space-x-5',
                        6 => '-space-x-6',
                        7 => '-space-x-7',
                        8 => '-space-x-8',
                        default => 'gap-1.5',
                    },
                ]); ?>"
            >
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $limitedState; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stateItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img
                        src="<?php echo e(filled($stateItem) ? $getImageUrl($stateItem) : $defaultImageUrl); ?>"
                        <?php echo e($getExtraImgAttributeBag()
                                ->class([
                                    'max-w-none object-cover object-center',
                                    'rounded-full' => $isCircular,
                                    $ringClasses,
                                ])
                                ->style([
                                    "height: {$height}" => $height,
                                    "width: {$width}" => $width,
                                ])); ?>

                    />
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><?php if($hasLimitedRemainingText && ($loop->iteration < count($limitedState)) && (! $isLimitedRemainingTextSeparate) && $isCircular): ?>
                    <div
                        style="
                            <?php if($height): ?> height: <?php echo e($height); ?>; <?php endif; ?>
                            <?php if($width): ?> width: <?php echo e($width); ?>; <?php endif; ?>
                        "
                        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                            'flex items-center justify-center bg-gray-100 font-medium text-gray-500 dark:bg-gray-800 dark:text-gray-400',
                            'rounded-full' => $isCircular,
                            $limitedRemainingTextSizeClasses,
                            $ringClasses,
                        ]); ?>"
                        style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                            "height: {$height}" => $height,
                            "width: {$width}" => $width,
                        ]) ?>"
                    >
                        <span class="-ms-0.5">
                            +<?php echo e(count($state) - count($limitedState)); ?>

                        </span>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>

            <?php if($hasLimitedRemainingText && ($loop->iteration < count($limitedState)) && ($isLimitedRemainingTextSeparate || (! $isCircular))): ?>
                <div
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'font-medium text-gray-500 dark:text-gray-400',
                        $limitedRemainingTextSizeClasses,
                    ]); ?>"
                >
                    +<?php echo e(count($state) - count($limitedState)); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php elseif(($placeholder = $getPlaceholder()) !== null): ?>
        <?php if (isset($component)) { $__componentOriginal2078c004f342b84f8f2b0f2ab3478754 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2078c004f342b84f8f2b0f2ab3478754 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.columns.placeholder','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-tables::columns.placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($placeholder); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2078c004f342b84f8f2b0f2ab3478754)): ?>
<?php $attributes = $__attributesOriginal2078c004f342b84f8f2b0f2ab3478754; ?>
<?php unset($__attributesOriginal2078c004f342b84f8f2b0f2ab3478754); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2078c004f342b84f8f2b0f2ab3478754)): ?>
<?php $component = $__componentOriginal2078c004f342b84f8f2b0f2ab3478754; ?>
<?php unset($__componentOriginal2078c004f342b84f8f2b0f2ab3478754); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\00\editoraClamor\vendor\filament\tables\src\/../resources/views/columns/image-column.blade.php ENDPATH**/ ?>