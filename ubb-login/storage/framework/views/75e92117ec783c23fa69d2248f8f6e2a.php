

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="min-h-screen animated-bg flex items-center justify-center px-4 relative overflow-hidden">

    <!-- blobs -->
    <div class="absolute w-96 h-96 bg-blue-500/20 blur-3xl rounded-full -top-20 -left-20 animate-blob"></div>
    <div class="absolute w-96 h-96 bg-purple-500/20 blur-3xl rounded-full -bottom-20 -right-20 animate-blob2"></div>

    <!-- WRAPPER UTAMA (INI YANG JADI SATU KESATUAN) -->
    <div class="flex flex-col items-center w-full max-w-lg">

        <!-- ICON -->
<div class="z-10 mb-[30px]">
    <div class="relative w-24 h-4 flex items-center justify-center">

        <!-- glow -->
        <div class="absolute w-24 h-24 bg-blue-500/20 blur-2xl rounded-full animate-pulse"></div>

        <!-- icon (outline user) -->
        <svg 
            class="relative w-12 h-12 text-white drop-shadow-[0_0_20px_rgba(59,130,246,1)]"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            viewBox="0 0 24 24"
        >
            <path 
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 6.75a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" 
            />
            <path 
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4.5 20.25a7.5 7.5 0 0115 0" 
            />
        </svg>

    </div>
</div>

        <!-- CARD (IKUT IKUTAN ICON) -->
        <div class="glass-card w-full rounded-3xl p-8 text-white">

            <h1 class="text-4xl font-bold text-center mb-6">
                Dashboard
            </h1>

            <div class="space-y-4 mb-6">

                <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                    <p class="text-slate-300 text-sm">Nama</p>
                    <p class="text-xl font-semibold"><?php echo e(Auth::user()->name); ?></p>
                </div>

                <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                    <p class="text-slate-300 text-sm">Email</p>
                    <p class="text-xl font-semibold"><?php echo e(Auth::user()->email); ?></p>
                </div>

            </div>

            <div class="text-center mb-6">
                <p class="text-slate-300 text-sm">Selamat datang kembali</p>
                <p class="text-2xl font-bold"><?php echo e(Auth::user()->name); ?> 👋</p>
            </div>

            <form action="/logout" method="POST">
                <?php echo csrf_field(); ?>
                <button class="w-full py-3 rounded-xl text-white font-semibold
                    bg-gradient-to-r from-red-500 to-pink-600
                    hover:scale-[1.02] transition-all duration-300">
                    Logout
                </button>
            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laragon\www\login-test\resources\views/dashboard.blade.php ENDPATH**/ ?>