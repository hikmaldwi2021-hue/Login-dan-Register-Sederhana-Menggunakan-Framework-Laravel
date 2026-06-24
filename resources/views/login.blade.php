
@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="min-h-screen animated-bg flex items-center justify-center px-4 relative overflow-hidden">

<div class="absolute w-96 h-96 bg-blue-500/20 blur-3xl rounded-full -top-20 -left-20 animate-blob"></div>

<div class="absolute w-96 h-96 bg-purple-500/20 blur-3xl rounded-full -bottom-20 -right-20 animate-blob2"></div>

    <div class="glass-card w-full max-w-md rounded-3xl p-8 relative z-10">

       <h1 class="text-4xl font-bold text-white text-center mb-2">
    Login
        </h1>
        <p class="text-center text-slate-300 mb-8">
            Masuk ke akun Anda
        </p>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/login" class="space-y-4">
            @csrf

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
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

            <button
                type="submit"
                class="w-full py-3 rounded-xl text-white font-semibold
                bg-gradient-to-r
                from-blue-500
                to-purple-600
                hover:scale-[1.02]
                transition-all duration-300"
            >
                Login
            </button>
        </form>

        <p class="text-center text-slate-300 mt-6">
            Belum punya akun?

            <a
                href="/register"
                class="text-blue-400 hover:text-blue-300 font-medium"
            >
                Register
            </a>
        </p>

        <div class="text-center mt-4">
    <a href="/forgot-password" class="text-blue-400 hover:text-blue-300 text-sm">
        Lupa password?
    </a>
</div>

    </div>

</div>



@endsection
