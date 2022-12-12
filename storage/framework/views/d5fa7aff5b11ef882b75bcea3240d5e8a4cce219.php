<?php $__env->startSection('tableName', __('Web/App Commercial Users')); ?>
<?php $__env->startSection('searchOptions'); ?>
    <option value="first_name"><?php echo e(__('First Name')); ?></option>
    <option value="last_name"><?php echo e(__('Last Name')); ?></option>
    <option value="phone_number"><?php echo e(__('Phone Number')); ?></option>
    <option value="email"><?php echo e(__('Email')); ?></option>
    <option value="is_personal"><?php echo e(__('Account Type')); ?></option>
    <option value="birth_date"><?php echo e(__('Birth Date')); ?></option>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-head-names'); ?>
    <th><?php echo e(__('First Name')); ?></th>
    <th><?php echo e(__('Last Name')); ?></th>
    <th><?php echo e(__('Phone Number')); ?></th>
    <th><?php echo e(__('Email')); ?></th>
    <th><?php echo e(__('Active')); ?></th>
    <th><?php echo e(__('Created At')); ?></th>
    <th><?php echo e(__('Birth Date')); ?></th>
    <th><?php echo e(__('Action')); ?></th>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-body'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tbody>
            <tr>
                <td><?php echo e($data->first_name ?? ''); ?>

                </td>
                <td><?php echo e($data->last_name ?? ''); ?>

                </td>
                <td><?php echo e($data->phone_number ?? ''); ?>

                </td>
                <td><?php echo e($data->email ?? ''); ?>

                </td>
                <td><?php echo e($data->is_active == 1 ? __('Yes') : __('No')); ?>

                </td>
                <td><?php echo e($data->created_at ?? __('Empty')); ?>

                </td>
                <td><?php echo e($data->birth_date ?? __('Empty')); ?>

                </td>
                <?php if(auth()->check() && auth()->user()->hasRole('Super-Admin')): ?>
                    <td>
                        <?php if($data->hasRole('Super-Admin') == 0): ?>
                            <?php if($data->is_active == 1): ?>
                                <button type="button"
                                    class="btn <?php echo e($data->is_active == 1 ? 'btn-outline-danger' : 'btn-outline-success'); ?>"
                                    wire:click.prevent="disable(<?php echo e($data->user_id); ?>)"><?php echo e($data->is_active == 1 ? __('Disable') : __('Enable')); ?></button>
                            <?php else: ?>
                                <button type="button"
                                    class="btn <?php echo e($data->is_active == 1 ? 'btn-outline-danger' : 'btn-outline-success'); ?>"
                                    wire:click.prevent="active(<?php echo e($data->user_id); ?>)"><?php echo e($data->is_active == 1 ? __('Disable') : __('Enable')); ?></button>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                <?php endif; ?>
            </tr>
        </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        
    <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('linksOfPaganation'); ?>
    <?php echo $Users->links(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.livewireLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/livewire/dashboard/users/web-app-index2.blade.php ENDPATH**/ ?>