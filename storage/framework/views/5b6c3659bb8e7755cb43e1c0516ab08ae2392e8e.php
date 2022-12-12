<div id="app">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-4">
                                        <?php if(app()->getLocale() == 'en'): ?>
                                            <a href="<?php echo e(route('web.crud.dashboard', app()->getLocale())); ?>"
                                                class="btn btn-outline-secondary mx-auto w-100"><i
                                                    class="bi bi-skip-backward-fill"></i></a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('web.crud.dashboard', app()->getLocale())); ?>"
                                                class="btn btn-outline-secondary mx-auto w-100"><i
                                                    class="bi bi-skip-forward-fill"></i></a>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-4">
                                        <h3 class="text-center font-weight-light my-4"><?php echo $__env->yieldContent('tableName'); ?></h3>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <input wire:model.debounce.300ms="search" type="text"
                                                class="form-control form-control-lg mb-3"
                                                placeholder="<?php echo e(__('Search Here')); ?>">
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" wire:model="orderBy">
                                                    <?php echo $__env->yieldContent('searchOptions'); ?>
                                                    
                                                </select>
                                                <label for="ChooseOrderCoulmn"><?php echo e(__('Order By Coulmn')); ?></label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" wire:model="orderAsc">
                                                    <option value="1"><?php echo e(__('Ascending')); ?></option>
                                                    <option value="0"><?php echo e(__('Descending')); ?></option>
                                                </select>
                                                <label for="ChooseOrderType"><?php echo e(__('Order Type')); ?></label>
                                                <div class="col-6 col-md-6 mx-auto">
                                                    <?php echo $__env->yieldContent('createButton'); ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <div class=" col-12">
                                                <div class="card shadow-lg border-2 rounded-lg">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-right">
                                                                    <div class="card-body table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <thead class="thead-dark">
                                                                                <tr>
                                                                                    <?php echo $__env->yieldContent('table-head-names'); ?>
                                                                                </tr>
                                                                            </thead>
                                                                            <?php echo $__env->yieldContent('table-body'); ?>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div wire:ignore.self class="modal fade" id="CreateModal" tabindex="-1"
                                        aria-labelledby="CreateModallabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="CreateModalText">
                                                        <?php echo e(__('Create New')); ?>

                                                        <?php echo $__env->yieldContent('tableName'); ?>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" wire:click.prevent="clear()"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php echo $__env->yieldContent('create-model-body'); ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit"
                                                        class="btn btn-block w-100 btn-outline-success"
                                                        wire:click.prevent="Create()"><?php echo e(__('Create')); ?> <i
                                                            class="bi bi-file-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1"
                                        aria-labelledby="editModallabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalText"><?php echo e(__('Edit')); ?>

                                                        <?php echo $__env->yieldContent('tableName'); ?>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" wire:click.prevent="clear()"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php echo $__env->yieldContent('edit-model-body'); ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal"
                                                        wire:click.prevent="clear()"><?php echo e(__('Close')); ?></button>
                                                    <button type="button" class="btn btn-danger"
                                                        wire:click.prevent="delete()"><?php echo e(__('Delete')); ?></button>
                                                    <button type="submit" class="btn btn-primary"
                                                        wire:click.prevent="update()"><?php echo e(__('Save Changes')); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php echo $__env->yieldContent('confirm-delete-model'); ?>
                                    
                                    <?php echo $__env->yieldContent('linksOfPaganation'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/layouts/livewireLayout.blade.php ENDPATH**/ ?>