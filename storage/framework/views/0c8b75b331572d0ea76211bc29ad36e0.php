<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="flex flex-col md:flex-row md:hidden text-center mt-10">
        <div class="w-full md:w-[500px] text-center md:text-left">
          <h1 class="text-4xl md:text-6xl font-light mt-12 text-gray-600 mb-5 md:mb-16 text-center mx-auto w-full">
            Our Blogs
          </h1>
          
          <p>Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and more.</p>
        </div>
    </div>

    <div class="m-16 hidden md:block mt-20 text-gray-400">
         <h2 class="text-4xl">Our Blogs</h2>
    </div>

    <section class="m-10 container mx-auto">
        <div class="m-4 md:m-0">

            <?php $__currentLoopData = $recentPosts->slice(0,30)->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if (isset($component)) { $__componentOriginal3c41f253972e0c5d907ca35639c57c3f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c41f253972e0c5d907ca35639c57c3f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.component3','data' => ['posts' => $posts->values()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['posts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($posts->values())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c41f253972e0c5d907ca35639c57c3f)): ?>
<?php $attributes = $__attributesOriginal3c41f253972e0c5d907ca35639c57c3f; ?>
<?php unset($__attributesOriginal3c41f253972e0c5d907ca35639c57c3f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c41f253972e0c5d907ca35639c57c3f)): ?>
<?php $component = $__componentOriginal3c41f253972e0c5d907ca35639c57c3f; ?>
<?php unset($__componentOriginal3c41f253972e0c5d907ca35639c57c3f); ?>
<?php endif; ?>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </section>
</body>
</html><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/pages/blogs.blade.php ENDPATH**/ ?>