
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'sortable' => null,
    'direction' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'sortable' => null,
    'direction' => null,
]); ?>
<?php foreach (array_filter(([
    'sortable' => null,
    'direction' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<th class="border-bottom">
    <?php if (! ($sortable)): ?>
    <a class="text-default me-3"><?php echo e($slot); ?></a>
    <?php else: ?>
        <a <?php echo e($attributes->except('class')); ?> class="text-default me-3">
            <span><?php echo e($slot); ?></span>

            <span>
                <?php if($direction === 'asc'): ?>
                    <i class="fas fa-sort-up"></i>
                <?php elseif($direction === 'desc'): ?>
                    <i class="fas fa-sort-down"></i>                
                <?php else: ?>
                    <i class="fas fa-sort"></i>                
                <?php endif; ?>
            </span>
        </a>
    <?php endif; ?>
</th>
<?php /**PATH C:\Users\augus\Documents\Anavue frontend\anavuePortal\dashboard\resources\views/components/table/heading.blade.php ENDPATH**/ ?>