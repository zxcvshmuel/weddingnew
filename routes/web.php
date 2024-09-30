<?php

use App\Livewire\Frontend\Homepage;
use App\Livewire\Frontend\Preview;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->name('home');

Route::get('preview/{invitation_id}', Preview::class)->name('preview');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
