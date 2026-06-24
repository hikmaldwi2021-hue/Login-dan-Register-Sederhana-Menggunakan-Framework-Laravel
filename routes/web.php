<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| GUEST ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {

    // login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // register
    Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    // forgot password page
    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    });

    // send reset link
    Route::post('/forgot-password', function (Request $request) {

        $request->validate([
            'email' => 'required|email'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
            
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Link reset password sudah dikirim ke email dan akan kadaluarsa dalam 5 menit')
            : back()->withErrors(['email' => 'Email tidak ditemukan']);
    });


    // reset password form
Route::get('/reset-password/{token}', function ($token, Request $request) {

    $record = DB::table('password_reset_tokens')
        ->where('email', $request->email)
        ->first();

    if (!$record) {
        return view('auth.link-expired');
    }

    $createdAt = Carbon::parse($record->created_at);

    if ($createdAt->diffInSeconds(now()) > 300) {
        return view('auth.link-expired');
    }

    return view('auth.reset-password', [
        'token' => $token
    ]);

})->name('password.reset');

    // reset password submit
    Route::post('/reset-password', function (Request $request) {

    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed'
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();
        }
    );


    return $status === Password::PASSWORD_RESET
        ? redirect('/login')->with('success', 'Password berhasil direset')
        : back()->withErrors(['email' => 'Token tidak valid']);
})->name('password.store'); // 🔥 INI WAJIB

});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout']);
});

