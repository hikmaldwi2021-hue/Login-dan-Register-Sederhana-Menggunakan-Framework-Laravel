@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-center mb-2">
            Reset Password
        </h1>

        <p class="text-center text-gray-500 mb-6">
            Masukkan password baru untuk akun kamu
        </p>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
            @csrf

            {{-- Token reset password --}}
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            {{-- Email --}}
            <input
                type="email"
                name="email"
                value="{{ old('email', request()->email) }}"
                readonly
                class="w-full border rounded-lg px-4 py-3"
                required
            />

            {{-- Password baru --}}
            <input
                type="password"
                name="password"
                placeholder="Password baru"
                class="w-full border rounded-lg px-4 py-3"
                required
            />

            {{-- Konfirmasi password --}}
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

@endsection