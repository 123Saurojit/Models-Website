<?php $__env->startSection('body'); ?>


    <?php echo $__env->make('admin.layout.helper.success-msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="w-100">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Categories</h4>
                
                <?php if (isset($component)) { $__componentOriginal781089cd478f3e09d520a65f160df974 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal781089cd478f3e09d520a65f160df974 = $attributes; } ?>
<?php $component = App\View\Components\Admin\Table::resolve(['headers' => ['Name'],'columns' => ['name'],'arrayData' => $allCategory,'editUrl' => 'update-category','deleteUrl' => 'delete-category'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal781089cd478f3e09d520a65f160df974)): ?>
<?php $attributes = $__attributesOriginal781089cd478f3e09d520a65f160df974; ?>
<?php unset($__attributesOriginal781089cd478f3e09d520a65f160df974); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal781089cd478f3e09d520a65f160df974)): ?>
<?php $component = $__componentOriginal781089cd478f3e09d520a65f160df974; ?>
<?php unset($__componentOriginal781089cd478f3e09d520a65f160df974); ?>
<?php endif; ?>
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/admin/category/all-category.blade.php ENDPATH**/ ?>