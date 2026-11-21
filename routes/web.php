<?php

use App\Livewire\Auth\Register;
use App\Livewire\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Route};

Route::get('/', Welcome::class)->name('dashboard');
Route::get('/register', Register::class)->name('auth.register');
Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');
