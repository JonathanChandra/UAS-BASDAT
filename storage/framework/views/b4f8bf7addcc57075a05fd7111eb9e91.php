

<?php $__env->startSection('content'); ?>
 <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Posts</h1>
        <a href="<?php echo e(route('posts.create')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded mb-6 inline-block">Add New</a>

        <!-- Table Section -->
        <table class="table-auto w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Content</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Created At</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b">
                        <td class="border px-4 py-2">
                            <?php if($post->image): ?>
                                <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" class="w-16 h-16 object-cover rounded">
                            <?php else: ?>
                                <span class="text-gray-500">No Image</span>
                            <?php endif; ?>
                        </td>
                        <td class="border px-4 py-2"><?php echo e($post->title); ?></td>
                        <td class="border px-4 py-2"><?php echo e(Str::limit($post->content, 50)); ?></td>
                        <td class="border px-4 py-2"><?php echo e(ucfirst($post->status)); ?></td>
                        <td class="border px-4 py-2"><?php echo e($post->created_at->format('d M Y')); ?></td>
                        <td class="border px-4 py-2">
                            <a href="<?php echo e(route('posts.edit', $post)); ?>" class="text-blue-500 mr-2">Edit</a>
                            <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="mb-4">
                        <?php if($post->image): ?>
                            <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-56 object-cover rounded">
                        <?php else: ?>
                            <div class="bg-gray-200 w-full h-40 rounded flex items-center justify-center text-gray-500">
                                No Image
                            </div>
                        <?php endif; ?>
                    </div>
                    <h2 class="text-lg font-semibold"><?php echo e($post->title); ?></h2>
                    <p class="text-gray-600 text-sm mt-2"><?php echo e(Str::limit($post->content, 100)); ?></p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo e($post->created_at->format('d M Y')); ?></span>
                        <span class="px-2 py-1 text-xs bg-blue-100 text-blue-500 rounded">
                            <?php echo e(ucfirst($post->status)); ?>

                        </span>
                    </div>
                    <a href="<?php echo e(route('posts.show', $post)); ?>" class="text-blue-500 hover:underline">View</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            <?php echo e($posts->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\uas-jonathan-baasdatlanjut\resources\views/posts/index.blade.php ENDPATH**/ ?>