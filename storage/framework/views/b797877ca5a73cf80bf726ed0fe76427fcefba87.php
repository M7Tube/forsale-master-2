<div class="container my-5">
    <h4 class="mb-2"><b><?php echo e(__('Terms and Conditions')); ?></b></h4>
    <?php if(app()->getLocale() == 'en'): ?>
        <p><?php echo e($term['en_terms_conditions'] ?? __('Empty')); ?></p>
    <?php else: ?>
        <p><?php echo e($term['ar_terms_conditions'] ?? __('Empty')); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/livewire/website/terms.blade.php ENDPATH**/ ?>