<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.dashboard')->html();
} elseif ($_instance->childHasBeenRendered('J46gQcz')) {
    $componentId = $_instance->getRenderedChildComponentId('J46gQcz');
    $componentTag = $_instance->getRenderedChildComponentTagName('J46gQcz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('J46gQcz');
} else {
    $response = \Livewire\Livewire::mount('dashboard.dashboard');
    $html = $response->html();
    $_instance->logRenderedChild('J46gQcz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/Dashboard/dashboard.blade.php ENDPATH**/ ?>