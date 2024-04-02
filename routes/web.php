<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Admin-specific routes

Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:' . User::ROLE_ADMIN,
])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});


// Agent-specific routes
Route::prefix('agent')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:' . User::ROLE_AGENT,
])->group(function () {

    Route::get('/dashboard', [AgentController::class, 'index'])->name('agent.dashboard');
});


// User-specific routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:' . User::ROLE_USER,
])->group(function () {

    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
