@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-center mb-2">
            Lupa Password
        </h1>

        <p class="text-center text-gray-500 mb-6">
            Masukkan email untuk reset password
        </p>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/forgot-password" class="space-y-4">
            @csrf

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

@endsection