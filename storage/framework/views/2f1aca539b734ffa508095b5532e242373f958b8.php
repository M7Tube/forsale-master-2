<?php $__env->startSection('title', __('My Wallet')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.my-wallet')->html();
} elseif ($_instance->childHasBeenRendered('WSWFMvf')) {
    $componentId = $_instance->getRenderedChildComponentId('WSWFMvf');
    $componentTag = $_instance->getRenderedChildComponentTagName('WSWFMvf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WSWFMvf');
} else {
    $response = \Livewire\Livewire::mount('website.my-wallet');
    $html = $response->html();
    $_instance->logRenderedChild('WSWFMvf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/Website/MyWallet.blade.php ENDPATH**/ ?>