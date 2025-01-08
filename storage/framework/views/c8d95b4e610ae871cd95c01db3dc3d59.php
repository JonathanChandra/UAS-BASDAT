

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6 text-center"><?php echo e($post->title); ?></h1>

        <div class="bg-white shadow-lg rounded-lg p-6 max-w-4xl mx-auto">
            <?php if($post->image): ?>
                <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-96 object-cover rounded mb-6">
            <?php endif; ?>

            <div class="text-gray-700">
                <p class="mb-4"><?php echo e($post->content); ?></p>
                <p class="text-sm text-gray-500">Status: <span class="font-semibold"><?php echo e(ucfirst($post->status)); ?></span></p>
                <p class="text-sm text-gray-500">Created At: <?php echo e($post->created_at->format('d M Y, H:i')); ?></p>
            </div>

            <div class="mt-6">
                <a href="<?php echo e(route('posts.index')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Back to List</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\uas-jonathan-baasdatlanjut\resources\views/posts/show.blade.php ENDPATH**/ ?>