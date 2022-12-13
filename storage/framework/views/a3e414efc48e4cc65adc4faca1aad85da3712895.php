<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('AppSettings')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.app-settings.index')->html();
} elseif ($_instance->childHasBeenRendered('V5RY2Y1')) {
    $componentId = $_instance->getRenderedChildComponentId('V5RY2Y1');
    $componentTag = $_instance->getRenderedChildComponentTagName('V5RY2Y1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('V5RY2Y1');
} else {
    $response = \Livewire\Livewire::mount('dashboard.app-settings.index');
    $html = $response->html();
    $_instance->logRenderedChild('V5RY2Y1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/Dashboard/AppSettings/index.blade.php ENDPATH**/ ?>