<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Web/App Personal Users')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.users.web-app-index')->html();
} elseif ($_instance->childHasBeenRendered('Lj0bg67')) {
    $componentId = $_instance->getRenderedChildComponentId('Lj0bg67');
    $componentTag = $_instance->getRenderedChildComponentTagName('Lj0bg67');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Lj0bg67');
} else {
    $response = \Livewire\Livewire::mount('dashboard.users.web-app-index');
    $html = $response->html();
    $_instance->logRenderedChild('Lj0bg67', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/Dashboard/Users/WebAppindex.blade.php ENDPATH**/ ?>