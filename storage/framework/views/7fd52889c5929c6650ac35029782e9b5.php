

<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>

<div class="min-h-screen animated-bg flex items-center justify-center px-4 relative overflow-hidden">

    <!-- background blobs -->
    <div class="absolute w-96 h-96 bg-blue-500/20 blur-3xl rounded-full -top-20 -left-20 animate-blob"></div>
    <div class="absolute w-96 h-96 bg-purple-500/20 blur-3xl rounded-full -bottom-20 -right-20 animate-blob2"></div>

    <!-- card -->
    <div class="glass-card w-full max-w-md rounded-3xl p-8 relative z-10">

        <h1 class="text-4xl font-bold text-white text-center mb-2">
            Register
        </h1>

        <p class="text-center text-slate-300 mb-8">
            Buat akun baru
        </p>

        <?php if($errors->any()): ?>
            <div class="bg-red-500/20 border border-red-400/30 text-red-200 p-3 rounded-xl mb-4">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>• <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="/register" class="space-y-4">
            <?php echo csrf_field(); ?>

            <input
                type="text"
                name="name"
                value="<?php echo e(old('name')); ?>"
                placeholder="Nama"
                class="glass-input w-full rounded-xl px-4 py-3"
            />

            <input
                type="email"
                name="email"
                value="<?php echo e(old('email')); ?>"
                autocomplete="off"
                placeholder="Email"
                class="glass-input w-full rounded-xl px-4 py-3"
            />

            <input
                type="password"
                name="password"
                autocomplete="new-password"
                placeholder="Password"
                class="glass-input w-full rounded-xl px-4 py-3"
            />

            <input
                type="password"
                name="password_confirmation"
                placeholder="Konfirmasi Password"
                class="glass-input w-full rounded-xl px-4 py-3"
            />

            <button
                type="submit"
                class="w-full py-3 rounded-xl text-white font-semibold
                bg-gradient-to-r from-blue-500 to-purple-600
                hover:scale-[1.02]
                transition-all duration-300"
            >
                Register
            </button>
        </form>

        <p class="text-center text-slate-300 mt-6">
            Sudah punya akun?
            <a href="/login" class="text-blue-400 hover:text-blue-300 font-medium">
                Login
            </a>
        </p>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laragon\www\login-test\resources\views/register.blade.php ENDPATH**/ ?>