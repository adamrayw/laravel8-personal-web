

<?php $__env->startSection('title', 'Article | Adam Ray'); ?>

<?php $__env->startSection('content'); ?>
<main class="max-w-7xl mx-auto p-6 mt-16">
    <div class="container mb-3">
        <h2 class="text-xl font-semibold mt-1 md:mt-4">Latest Article</h2>
        <div class="grid grid-rows-1 grid-cols-1 md:grid-cols-2 col-6 gap-5">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card px-6 py-4 shadow-md bg-white rounded-lg">
                <h1 class="text-xl mb-1 font-semibold"><?php echo e($d->title); ?></h1>
                <div class="border-b-2 border-blue-600 w-8 mb-2 "></div>
                <p class="text-sm mb-4 text-gray-500 flex items-center"><i class="fas fa-user fa-sm pr-2"></i>Admin</p>
                a<a href="/article/<?php echo e($d->slug); ?>" class="float-right underline text-blue-600 text-sm hover:text-blue-800">Read More</a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php echo e($data->links()); ?>

</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-8-belajar\resources\views/home/article.blade.php ENDPATH**/ ?>