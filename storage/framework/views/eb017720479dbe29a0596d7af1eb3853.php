

<?php $__env->startSection('content'); ?>
 <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6 text-center">Create New Post</h1>

        <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg mx-auto">
            <form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea name="content" id="content" rows="5" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="image" class="w-full mt-2 px-4 py-2 border rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="w-full mt-2 px-4 py-2 border rounded-lg">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                        <option value="archived">Archived</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="aktif" class="block text-sm font-medium text-gray-700">Active</label>
                    <input type="checkbox" name="aktif" id="aktif" class="mt-2">
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Create Post</button>
                    <a href="<?php echo e(route('posts.index')); ?>" class="ml-4 text-gray-500 hover:underline">Cancel</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\uas-jonathan-baasdatlanjut\resources\views/posts/create.blade.php ENDPATH**/ ?>