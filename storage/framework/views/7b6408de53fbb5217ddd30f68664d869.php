

<?php $__env->startSection('title', 'Forgot Password'); ?>

<?php $__env->startSection('content'); ?>

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-center mb-2">
            Lupa Password
        </h1>

        <p class="text-center text-gray-500 mb-6">
            Masukkan email untuk reset password
        </p>

        <?php if(session('success')): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="/forgot-password" class="space-y-4">
            <?php echo csrf_field(); ?>

            <input
                type="email"
                name="email"
                placeholder="Email"
                class="w-full border rounded-lg px-4 py-3"
            />

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg"
            >
                Kirim Link Reset
            </button>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laragon\www\login-test\resources\views/auth/forgot-password.blade.php ENDPATH**/ ?>