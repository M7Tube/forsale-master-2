<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Web/App Commercial Users')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.users.web-app-index2')->html();
} elseif ($_instance->childHasBeenRendered('wZE6jzg')) {
    $componentId = $_instance->getRenderedChildComponentId('wZE6jzg');
    $componentTag = $_instance->getRenderedChildComponentTagName('wZE6jzg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wZE6jzg');
} else {
    $response = \Livewire\Livewire::mount('dashboard.users.web-app-index2');
    $html = $response->html();
    $_instance->logRenderedChild('wZE6jzg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/Dashboard/Users/WebAppindex2.blade.php ENDPATH**/ ?>