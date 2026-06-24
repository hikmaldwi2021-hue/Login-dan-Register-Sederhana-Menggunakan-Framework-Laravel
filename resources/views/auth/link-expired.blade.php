@extends('layouts.app')

@section('title', 'Link Expired')

@section('content')

<div class="min-h-screen animated-bg flex items-center justify-center px-4 relative overflow-hidden">

    <div class="absolute w-96 h-96 bg-red-500/20 blur-3xl rounded-full -top-20 -left-20 animate-blob"></div>

    <div class="absolute w-96 h-96 bg-purple-500/20 blur-3xl rounded-full -bottom-20 -right-20 animate-blob2"></div>

    <div class="glass-card w-full max-w-md rounded-3xl p-8 relative z-10">

        <div class="text-center">

            <div class="text-6xl mb-4">
                ⏳
            </div>

            <h1 class="text-4xl font-bold text-white mb-3">
                Link Expired
            </h1>

            <p class="text-slate-300 mb-8">
                Link reset password sudah kedaluwarsa.
                Silakan minta link baru untuk melanjutkan proses reset password.
            </p>

            <a
                href="/forgot-password"
                class="block w-full py-3 rounded-xl text-white font-semibold
                bg-gradient-to-r
                from-blue-500
                to-purple-600
                hover:scale-[1.02]
                transition-all duration-300 text-center"
            >
                Request New Link
            </a>

        </div>

    </div>

</div>

@endsection