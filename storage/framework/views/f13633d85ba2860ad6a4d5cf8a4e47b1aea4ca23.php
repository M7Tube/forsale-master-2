<?php $__env->startSection('title', __('Add New Ad')); ?>

<?php $__env->startSection('head'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.add-new-ad')->html();
} elseif ($_instance->childHasBeenRendered('R1dpO99')) {
    $componentId = $_instance->getRenderedChildComponentId('R1dpO99');
    $componentTag = $_instance->getRenderedChildComponentTagName('R1dpO99');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('R1dpO99');
} else {
    $response = \Livewire\Livewire::mount('website.add-new-ad');
    $html = $response->html();
    $_instance->logRenderedChild('R1dpO99', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $("#picture").on("change", function() {
            if ($("#picture")[0].files.length > 8) {
                $("#picture").val(null);
                alert("You can select only 8 images");
            } else {

                $("#imageUploadForm").submit();
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/Website/AddNewAd.blade.php ENDPATH**/ ?>