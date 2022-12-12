<?php $__env->startSection('title', __('Terms and Conditions')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.terms')->html();
} elseif ($_instance->childHasBeenRendered('P8oerMa')) {
    $componentId = $_instance->getRenderedChildComponentId('P8oerMa');
    $componentTag = $_instance->getRenderedChildComponentTagName('P8oerMa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('P8oerMa');
} else {
    $response = \Livewire\Livewire::mount('website.terms');
    $html = $response->html();
    $_instance->logRenderedChild('P8oerMa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/Website/terms.blade.php ENDPATH**/ ?>