

<?php $__env->startSection('title', 'Reset Password'); ?>

<?php $__env->startSection('content'); ?>

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-center mb-2">
            Reset Password
        </h1>

        <p class="text-center text-gray-500 mb-6">
            Masukkan password baru untuk akun kamu
        </p>

        <?php if($errors->any()): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
                <ul class="list-disc ml-5">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('password.store')); ?>" class="space-y-4">
            <?php echo csrf_field(); ?>

            
            <input type="hidden" name="token" value="<?php echo e(request()->route('token')); ?>">

            
            <input
                type="email"
                name="email"
                value="<?php echo e(old('email', request()->email)); ?>"
                readonly
                class="w-full border rounded-lg px-4 py-3"
                required
            />

            
            <input
                type="password"
                name="password"
                placeholder="Password baru"
                class="w-full border rounded-lg px-4 py-3"
                required
            />

            
            <input
                type="password"
                name="password_confirmation"
                placeholder="Konfirmasi password"
                class="w-full border rounded-lg px-4 py-3"
                required
            />

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg"
            >
                Reset Password
            </button>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laragon\www\login-test\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>